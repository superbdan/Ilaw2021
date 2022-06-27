<?php

//supplier_action.php

include('database_connection.php');

if(isset($_POST['btn_action']))
{
	if($_POST['btn_action'] == 'Add')
	{
		$query = "
		INSERT INTO suppliers (supplier_name, contact_no, address) 
		VALUES (:supplier_name, :contact_no, :address)
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':supplier_name'	=>	$_POST["supplier_name"],
				':contact_no'	=>	$_POST["contact_no"],
				':address'	=>	$_POST["address"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Supplier Added Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		}
	}

	if($_POST['btn_action'] == 'fetch_single')
	{
		$query = "
		SELECT * FROM suppliers WHERE supplier_id = :supplier_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':supplier_id'	=>	$_POST["supplier_id"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['supplier_name'] = $row['supplier_name'];
			$output['contact_no'] = $row['contact_no'];
			$output['address'] = $row['address'];
		}
		echo json_encode($output);
	}
	if($_POST['btn_action'] == 'Edit')
	{
		$query = "
		UPDATE suppliers set 
		supplier_name = :supplier_name, 
		contact_no = :contact_no, 
		address = :address
		WHERE supplier_id = :supplier_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':supplier_name'	=>	$_POST["supplier_name"],
				':contact_no'	=>	$_POST["contact_no"],
				':address'	=>	$_POST["address"],
				':supplier_id'		=>	$_POST["supplier_id"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Supplier Edited Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		}
	}

	if($_POST['btn_action'] == 'delete')
	{
		$query = "
		DELETE FROM suppliers WHERE supplier_id = :supplier_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
			':supplier_id'		=>	$_POST["supplier_id"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Supplier Removed!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		}
	}
}

?>