<?php

//user_action.php

include('database_connection.php');

if(isset($_POST['btn_action']))
{
	if($_POST['btn_action'] == 'Add')
	{
		$query = "
		INSERT INTO user_details (user_name, user_email, user_contact, user_address, user_password, user_type, user_status) 
		VALUES (:user_name, :user_email, :user_contact, :user_address, :user_password, :user_type, 'active')
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':user_name'	=>	$_POST["user_name"],
				':user_email'	=>	$_POST["user_email"],
				':user_contact'	=>	$_POST["user_contact"],
				':user_address'	=>	$_POST["user_address"],
				':user_password'	=>	$_POST["user_password"],
				':user_type'	=>	$_POST["user_type"],
                ':user_status'	=>	$_POST["user_status"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Username added <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		}
	}
	
	if($_POST['btn_action'] == 'fetch_single')
	{
		$query = "SELECT * FROM user_details WHERE id = :id";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':id'	=>	$_POST["id"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['user_name'] = $row['user_name'];
			$output['user_email'] = $row['user_email'];
			$output['user_contact'] = $row['user_contact'];
            $output['user_address'] = $row['user_address'];
            $output['user_password'] = $row['user_password'];
            $output['user_type'] = $row['user_type'];
            $output['user_status'] = $row['user_status'];
		}
		echo json_encode($output);
	}

	if($_POST['btn_action'] == 'Edit')
	{
		$query = "
		UPDATE user_details set user_name = :user_name,
		user_email = :user_email,
        user_contact = :user_contact,
        user_address = :user_address,
        user_type = :user_type,
        user_status = :user_status
		WHERE id = :id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(		
				':user_name'	=>	$_POST["user_name"],
				':user_email'	=>	$_POST["user_email"],
				':user_contact'	=>	$_POST["user_contact"],
				':user_address'	=>	$_POST["user_address"],
				':user_type'	=>	$_POST["user_type"],
                ':user_status'	=>	$_POST["user_status"],
				':id'	=>	$_POST["id"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Username Edited <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		}
	}
	if($_POST['btn_action'] == 'delete')
	{
		$query = "
		DELETE FROM user_details 
		WHERE id = :id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':id'		=>	$_POST["id"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'User deleted <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		}
	}
}

?>