<?php

//user_fetch.php

include('database_connection.php');

$query = '';

$output = array();

$query .= "
	SELECT * FROM user_details

";

if(isset($_POST["search"]["value"]))
{
	
	$query .= 'WHERE user_name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR user_email LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR user_contact LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR user_address LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR user_type LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR user_status LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST['order']))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id ASC ';
}

if($_POST['length'] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$filtered_rows = $statement->rowCount();

foreach($result as $row)
{
	$status = '';
	if($row['user_status'] == 'Active')
	{
		$status = '<center><span class="badge badge-success mt-2">Active</span>';
	}
	else
	{
		$status = '<center><span class="badge badge-danger mt-2">Inactive</span>';
	}
	$sub_array = array();
	$sub_array[] = $row['user_name'];
	$sub_array[] = $row['user_email'];
	$sub_array[] = $row['user_contact'];
	$sub_array[] = $row['user_address'];
	$sub_array[] = $row['user_type'];
    $sub_array[] = $status;
	$sub_array[] = '<center><button type="button" name="update" id="'.$row["id"].'" class="btn btn-primary btn-xs update" data-toggle="tooltip" data-placement="bottom" title="Edit User"><i class="fa fa-pencil"></i></button> <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete" data-toggle="tooltip" data-placement="bottom" title="Remove User" data-status="'.$row["user_name"].'"><i class="fa fa-trash"></i></button></center>';
	$data[] = $sub_array;
}

$output = array(
	"draw"			=>	intval($_POST["draw"]),
	"recordsTotal"  	=>  $filtered_rows,
	"recordsFiltered" 	=> 	get_total_all_records($connect),
	"data"				=>	$data
);

function get_total_all_records($connect)
{
	$statement = $connect->prepare("SELECT * FROM user_details");
	$statement->execute();
	return $statement->rowCount();
}

echo json_encode($output);

?>