<?php
session_start();
require "connection.php";

$email = "";
$name = "";
$errors = array();

// if user signup button
if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($con, $_POST['first_name']);
    $mname = mysqli_real_escape_string($con, $_POST['middle_name']);
    $lname = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $region = mysqli_real_escape_string($con, $_POST['region']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $zip_code = mysqli_real_escape_string($con, $_POST['zip_code']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM user_details WHERE user_email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_DEFAULT);
        $code = rand(999999, 111111);
        $uid = 10;
        $status = "Inactive";
        $profile = "default_icon.png";
        $query = "SELECT user_id FROM user_details ORDER BY user_id DESC";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $lastid = $row['user_id'];
        if (empty($lastid)) {
            $uid = "CUS-0000001";
        } else {
            $idd = str_replace("CUS-", "", $lastid);
            $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
            $uid = 'CUS-' . $id;
        }
        $insert_data = "INSERT INTO user_details (user_id,first_name,middle_name,last_name,profile,user_email,region,province,city,home_address,zip_code,user_contact, user_password,user_type,code,user_status)
                           values('$uid','$fname','$mname','$lname','$profile','$email','$region','$province',$city,'$address','$zip_code','$contact','$encpass','user','$code','$status')";
        $data_check = mysqli_query($con, $insert_data);
        if ($data_check) {
            $subject = "Email Verification Code";
            // $message = "Your verification code is $code";
            $message = "Account Verification:
                       Good Day! We, from ILAW Lighting and Equipment Trading would like to inform you that you are about to create your ILAW Account, Please click the confirmation link below:
                       Your OTP is --> $code <-- 
                       Thank you and have a blast shopping!";
            $sender = "From: sobrangmachoko@gmail.com";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
//if user click verification code submit button
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user_details WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['user_email'];
        $code = 0;
        $status = 'Active';
        $update_otp = "UPDATE user_details SET code = $code, user_status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if ($update_res) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: index.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while updating code!";
        }
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click login button
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM user_details WHERE user_email = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['user_password'];
        $fetch_access = $fetch['user_type'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['user_status'];
            if ($status == 'Active') {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = $fetch_access;
                header('location: index.php');
            } else {
                $info = "It looks like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: user-otp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
        }
    } else {
        $errors['email'] = "It looks like you're not yet a member! Click on the Register button above.";
    }
}

//if user click continue button in forgot password form
if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM user_details WHERE user_email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE user_details SET code = $code WHERE user_email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Reset Password:
                Good Day! We, from ILAW Lighting and Equipment Trading would like to inform you that you are about to change your ILAW Account Password, Please copy the code below:
                Your password reset code is --> $code <-- 
                Thank you and have a blast shopping!";" ";
            $sender = "From: jmlibued257@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user_details WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['user_email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_DEFAULT);
        $update_pass = "UPDATE user_details SET code = $code, user_password = '$encpass' WHERE user_email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: login.php');
}
