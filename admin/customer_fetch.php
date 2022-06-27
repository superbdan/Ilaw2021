<?php

//customer_fetch.php

include('database_connection.php');

// $sample = $_POST['prod'];

// public function sel_prod_by_id($id){
// 	$query = "SELECT * items_cost WHERE items_name = '$id'";
// 	$result = $query->row_array();
// 	echo json_encode($result);
// 	}

$query = '';

$output = array();

$query .= "
	SELECT * FROM customer_order
";

if(isset($_POST["search"]["value"]))
{
	
	$query .= 'WHERE customer_name LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR status LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR customer_id LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST['order']))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY transaction_id ASC ';
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
	if($row['status'] == '0')
	{
		$status = '<center><span class="badge badge-pill badge-warning mt-2">Pending</span>';
	}
	elseif($row['status'] == '1')
	{
		$status = '<center><span class="badge badge-pill  badge-info mt-2">To Ship</span>';
	}
	elseif($row['status'] == '2')
	{
		$status = '<center><span class="badge badge-pill badge-primary mt-2">To Receive</span>';
	}
	elseif($row['status'] == '3')
	{
		$status = '<center><span class="badge badge-pill badge-success mt-2">Completed</span>';
	}
	elseif($row['status'] == '4')
	{
		$status = '<center><span class="badge badge-pill badge-danger mt-2">Cancelled</span>';
	}
	else
	{
		$status = '<center><span class="badge badge-danger mt-2">Invalid Order</span>';
	}
	$sub_array = array();
	// $sub_array[] = $row['id'];
	$sub_array[] = $row['transaction_id'];
	$sub_array[] = $row['customer_id'];
	$sub_array[] = $row['customer_name'];
	$sub_array[] = $row['customer_no'];
	$sub_array[] = $row['address'];
	$sub_array[] = $status;
	$sub_array[] = '<center><a href = "counter.php?id='.$row["transaction_id"].'" name="next" id="order_fetch.php?id='.$row["transaction_id"].'" class="btn btn-primary btn-xs update" data-toggle="tooltip" data-placement="bottom" title="Place to Counter"><i class="fa fa-shopping-cart" style="color:white"></i></a></center>'; 
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
	$statement = $connect->prepare("SELECT * FROM customer_order ");
	$statement->execute();
	return $statement->rowCount();
}

echo json_encode($output);





?>