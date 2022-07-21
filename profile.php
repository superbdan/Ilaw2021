<?php
require('database_connection.php');
$con = mysqli_connect('localhost', 'root', '', 'database');
$email = $_SESSION['email'];
if (isset($_POST['update_details'])) {
    $user_fname = $_POST['first_name'];
    $user_mname = $_POST['middle_name'];
    $user_lname = $_POST['last_name'];
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $zip_code = $_POST['zip_code'];
    $contact = $_POST['contact'];
    $home_address = $_POST['address'];
    $query = "UPDATE user_details SET first_name ='$user_fname', middle_name = '$user_mname', last_name ='$user_lname', 
    region = '$region', province = '$province', city = '$city', home_address = '$home_address', zip_code ='$zip_code', user_contact ='$contact' WHERE user_email = '$email'
    ";
    $result = mysqli_query($con, $query);

    // if($result){
        
    // }



}

if (isset($_FILES["image"]["name"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];


    $imageName = $_FILES["image"]["name"];
    $imageSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));


    if (!in_array($imageExtension, $validImageExtension)) {
        echo
        "
        <script>
            alert('Invalid Image Extension');
        </script>
        ";
    } elseif ($imageSize > 1200000) {
        echo
        "
            <script>
                alert('Image Size is Too Large');
            </script>
            ";
    } else {
        $newImageName = $name . " - " . $id;
        $newImageName .= "." . $imageExtension;
        $query = "UPDATE user_details SET profile = '$newImageName' WHERE user_id = '$id'";
        mysqli_query($con, $query);
        move_uploaded_file($tmpName, 'images/user-img/' . $newImageName);
        echo
        "
            <script>
            window.location.reload();'
            </script>
            ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<?php
$sql = "SELECT * FROM user_details WHERE user_email = '$email' ";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);
$cusId = $user['user_id'];
$name = $user['last_name'];
$img = $user['profile'];

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILAW</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/Logo/ILAW_Logo2.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="linkscript/fontawesome.js"></script>
    <!-- Owl Carousel (free version)-->
    <link rel="stylesheet" href="linkscript/bootstrap5.1.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="linkscript/owl.carousel.css" crossorigin="anonymous" />
    <script src="linkscript/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
    <script src="linkscript/owl.carousel.min.js" crossorigin="anonymous"></script>
    <!-- Custom CSS-->
    <link href="css/owl_carousel.css" rel="stylesheet" />
    <link href="css/style_e-commerce.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION['type'])) {
        if ($_SESSION['type'] == 'master') {
            $active = "Home";
            include("headers/admin_header.php");
        } else {
            $active = "Home";
            include("headers/customer_header.php");
        }
    } else {
        $active = "Home";
        include("headers/guest_header.php");
    }
    ?>

    <section class="first_section">
        <div class="BG_Cover">
            <img class="mySlides" src="images/Others/BG_Stairs.png">
            <img class="mySlides" src="images/Others/BG_Houses.png">
            <img class="mySlides" src="images/Others/BG_TV.png">
            <div class="column">
                <h1>ILAW Lighting and Equipment Trading</h1>
                <h2>"Making life brighter one Filipino home at a time."</h2>
                <button class="shopnow_btn" onclick="window.location='product.php #productnow';" type="button">Shop Now</button>
            </div>
        </div>
    </section>
    <section class= "second_section" >
            <div class = "line_PFOS">
                <h1>My Profile</h1>
                <p><i>Note: As a customer, your update information will be used upon ordering for order details. </i></p>
                </div>
            </section>
    <section class="profile_section" id="myprofile">
            <div class="upload ">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0 border shadow">
                                <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle border shadow mb-2" src="images/user-img/<?php echo $img ?>" alt="" title="<?php echo $img ?>" alt="profile_picture">
                                        <!-- Profile picture help block-->
                                        <div class="small font-italic text-muted mb-2">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-->
                                        <input type="hidden" name="id" value="<?php echo $cusId ?>">
                                        <input type="hidden" name="name" value="<?php echo $name ?>">
                                        <input class="form-control form-control-sm mb-2" type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                                        <span class="mt-2"><i class="fa fa-envelope"></i> <?php echo $email ?></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4  border shadow">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form method="POST" id="update">
                                        <!-- Form Row-->
                                        <div class="row">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-6">
                                                <h5><label for="inputFirstName">First Name</label></h5>
                                                <input class="form-control" name="first_name" type="text" placeholder="Enter your first name" value="<?php echo $user['first_name'] ?>" required>
                                            </div>
                                            <!-- Form Group (middle name)-->
                                            <div class="col-md-6">
                                                <h5><label for="inputMiddleName">Middle Name</label></h5>
                                                <input class="form-control" name="middle_name" type="text" placeholder="Enter your middle name" value="<?php echo $user['middle_name'] ?>">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6 mt-2">
                                                <h5><label for="inputLastName">Last Name</label></h5>
                                                <input class="form-control" name="last_name" type="text" placeholder="Enter your last name" value="<?php echo $user['last_name'] ?>" required>
                                            </div>
                                            <!-- Form Group (phone number)-->
                                            <div class="col-md-6 mt-2">
                                                <h5><label for="inputPhone">Mobile Number</label></h5>
                                                <input class="form-control" name="contact" type="number" placeholder="Enter your phone number" minlength="11" value="<?php echo $user['user_contact'] ?>" required>
                                            </div>
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row">
                                            <!-- Form Group (region)-->
                                            <div class="col-md-6 mt-2">
                                                <h5><label>Region</label></h5>
                                                <select class="form-control" id="region" name="region" style="cursor: pointer;">
                                                    <option value="<?php
                                                    $region = $user['region'];
                                                    $query = mysqli_query($con, "SELECT * FROM table_region WHERE region_id = '$region'");
                                                     while ($row = mysqli_fetch_array($query)) {
                                                    echo $row['region_id'];
                                                                    }
                                                    ?>"><?php
                                                    $region = $user['region'];
                                                    $query = mysqli_query($con, "SELECT * FROM table_region WHERE region_id = '$region'");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                     echo $row['region_name'], ' ( Current ) ';
                                                                    }
                                                    ?></option>
                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'database');
                                                    $query = mysqli_query($conn, "select * from table_region");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?php echo $row['region_id']; ?>"> <?php echo $row['region_name']; ?> </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <!-- Form Group (zip code)-->
                                            <div class="col-md-6 mt-2">
                                                <h5><label>Zip Code</label></h5>
                                                <input class="form-control" name="zip_code" type="number" placeholder="Enter your zip code" value="<?php echo $user['zip_code'] ?>">
                                            </div>
                                            <!-- Form Group (Province)-->
                                            <div class="col-md-6 mt-2">
                                                <h5><label>Province</label></h5>
                                                <select class="form-control" id="province" name="province" style="cursor: pointer;">
                                                    <option value=" <?php
                                                    $province = $user['province'];
                                                    $query = mysqli_query($con, "SELECT * FROM table_province WHERE province_id = '$province'");
                                                     while ($row = mysqli_fetch_array($query)) {
                                                     echo $row['province_id'];
                                                                    }
                                                    ?>"> <?php
                                                    $province = $user['province'];
                                                    $query = mysqli_query($con, "SELECT * FROM table_province WHERE province_id = '$province'");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    echo $row['province_name'];
                                                                    }
                                                    ?></option>
                                                </select>
                                            </div>
                                            <!-- Form Group (City)-->
                                            <div class="col-md-6 mt-2">
                                                <h5><label>City</label></h5>
                                                <select class="form-control" id="city" name="city" style="cursor: pointer;">
                                                    <option value=" <?php
                                                    $municipality = $user['city'];
                                                    $query = mysqli_query($con, "SELECT * FROM table_municipality WHERE municipality_id = '$municipality'");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    echo $row['municipality_id'];
                                                                    }
                                                    ?>"> <?php
                                                    $municipality = $user['city'];
                                                     $query = mysqli_query($con, "SELECT * FROM table_municipality WHERE municipality_id = '$municipality'");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    echo $row['municipality_name'];
                                                                    }
                                                    ?></option>
                                                </select>
                                            </div>
                                            <!-- Form Group (remaining address)-->
                                            <div class="mt-2">
                                                <h5><label  for="inputEmailAddress">Home Address</label></h5>
                                                <input class="form-control" name="address" type="text" placeholder="Enter your Blk/Lot/Street" value="<?php echo $user['home_address'] ?>" required>
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <div class="form-group text-center">
                                            <!-- <button type="submit" name="update_details" class="btn" style="background: #11cf1a; color: #fff" required>Submit</button> -->
                                            <button class="btn btn-primary mt-2" type="submit" onclick="showAlert()" name="update_details" ><i class="fa fa-save fa-lg"></i> Save Changes</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line_transactions">
                    <h3>My Transactions</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero doloremque, odio, non sapiente nam officia laboriosam in quibusdam nulla nisi architecto possimus illum asperiores laborum, exercitationem unde debitis voluptas nostrum.</p>
                    <!--Datatable-->
                    <div class="table-responsive">
                        <table id="category_data" class="table table-striped table-bordered w-100 d-block d-md-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!--/Datatable-->
    </section>

    <?php
    include("footer/footer.php")
    ?>
    <script src="js/functions.js" type="text/javascript"> </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#region").on('change', function() {
                var regionId = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "locajax.php",
                    data: {
                        regionId: regionId
                    },
                    dataType: "html",
                    success: function(data) {
                        $("#province").html(data);
                    }

                });
            })

            $("#province").on('change', function() {
                var provinceId = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "locajax.php",
                    data: {
                        provinceId: provinceId
                    },
                    dataType: "html",
                    success: function(data) {
                        $("#city").html(data);
                    }

                });
            })


        });






        document.getElementById("image").onchange = function() {
            document.getElementById('form').submit();
        }

        // $(document).ready(function() {


        //     var readURL = function(input) {
        //         if (input.files && input.files[0]) {
        //             var reader = new FileReader();

        //             reader.onload = function(e) {
        //                 $('.avatar').attr('src', e.target.result);
        //             }

        //             reader.readAsDataURL(input.files[0]);
        //         }
        //     }


        //     $(".file-upload").on('change', function() {
        //         readURL(this);
        //     });
        // });

            


        function showAlert() {
            //alert ("Saved Successfully!");  
                swal({
                    title: "Profile Successfully Edited!",
                    text: "You Updated your Profile.",
                timer: 50000,
                icon: "success",
                button: false,
                }).then(
                function () {},
                // handling the promise rejection
                function (dismiss) {
                    if (dismiss === 'timer') {
                    //console.log('I was closed by the timer')
                    }
                }
                )
        }
    </script>
<!-- For Cart-->
<script src="linkscript/main.js"></script>
    <?php

    ?>

</body>

</html>