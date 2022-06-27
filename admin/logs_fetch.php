<?php

//logs_fetch.php

include('database_connection.php');

$query = '';

$output = array();

$query .= "SELECT * FROM logs ";

if(isset($_POST["search"]["value"]))
{
	
	$query .= 'WHERE action LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR user LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR timestamp LIKE "%'.$_POST["search"]["value"].'%" ';
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
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['user'];
	$sub_array[] = $row['action'];
	$sub_array[] = $row['timestamp'];
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
	$statement = $connect->prepare("SELECT * FROM logs");
	$statement->execute();
	return $statement->rowCount();
}

echo json_encode($output);

?>