<?php
$ip_add = $_SERVER['REMOTE_ADDR'];

include('database_connection.php');
if(isset($_POST["category"])){
	/*$category_query = "SELECT * FROM category";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["category_id"];
			$cat_name = $row["category_name"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}*/

	$query = "SELECT * FROM category";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	foreach($result as $row)
		{
			$cid = $row["category_id"];
			$cat_name = $row["category_name"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	
	
}
if(isset($_POST["brand"])){
	/*$brand_query = "SELECT * FROM suppliers";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["supplier_id"];
			$brand_name = $row["supplier_name"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}*/

	$query = "SELECT * FROM suppliers";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
	foreach($result as $row)
	{
		$bid = $row["supplier_id"];
		$brand_name = $row["supplier_name"];
		echo "
				<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
		";
	}
	echo "</div>";
}
if(isset($_POST["page"])){
	$/*sql = "SELECT * FROM items";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}*/
	
	$query = "SELECT * FROM items";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$pageno = ceil($result/9999999999);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 999999999999;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	/*$product_query = "SELECT * FROM items LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$items_id    = $row['items_id'];
			$items_name = $row['items_name'];
			$items_price = $row['items_price'];
			$product_img1 = $row['product_img1'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$items_name</div>
								<div class='panel-body'>
									<img src='product_images/$product_img1' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>".CURRENCY." $items_price.00
									<button pid='$items_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}*/

	$query = "SELECT * FROM items LIMIT $start,$limit";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$items_id    = $row['items_id'];
		$item_descript = $row['item_descript'];
			$items_name = $row['items_name'];
			$items_price = $row['items_price'];
			$product_img1 = $row['product_img1'];
			$product_img2 = $row['product_img2'];
			echo "
			
			<li class='myItem shadow border'>
				<div class='container product' >
					<div class='row product-image'>
							<img class='pic-1' alt='product_image' src='admin/product_images/$product_img1' style='width: 260px; padding:10px'/>
								<img class='pic-2' alt='product_image' src='admin/product_images/$product_img2' style='width: 260px; padding:10px'/>
					<div class='col p-2'>
						<div class='row'>
  							<div class='col-12 h5 text-primary item-name'><strong>$items_name</strong></div>
							  <p class='item-description'>
							 $item_descript
							</p>
							<div class='col-12 h6 pt-1'><strong>".CURRENCY." $items_price.00 <span class='text-success'>&nbsp;In Stock<span></strong></div>
						</div>
						<footer>
							<a id='' href='product_single.php #prod_single' data-toggle='tooltip' data-placement='bottom' title='View Product' class='btn btn-primary btn-xs'><i class='fa fa-eye'></i></a>
							<a pid='$items_id' data-toggle='tooltip' data-placement='bottom' title='Add to Cart'style='background-color:#F7941D;' id='product' class='btn btn-xs text-white'><i class='fa fa-shopping-cart'></i></a>
						</footer>
					</div>
					</div>
				</div>
        	</li>
			";
	}
	
}
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	/*if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM items WHERE category_id = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM items WHERE supplier_id = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM items WHERE items_name LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
        $items_id    = $row['items_id'];
        $items_name = $row['items_name'];
        $items_price = $row['items_price'];
        $product_img1 = $row['product_img1'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$items_id</div>
								<div class='panel-body'>
									<img src='product_images/$product_img1' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$.$items_price.00
									<button pid='$items_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}*/
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$query = "SELECT * FROM items WHERE category_id = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$query = "SELECT * FROM items WHERE supplier_id = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$query = "SELECT * FROM items WHERE items_name LIKE '%$keyword%'";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row){
        $items_id    = $row['items_id'];
        $items_name = $row['items_name'];
        $items_price = $row['items_price'];
        $product_img1 = $row['product_img1'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$items_id</div>
								<div class='panel-body'>
									<img src='admin/product_images/$product_img1' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$.$items_price.00
									<button pid='$items_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
	//Add to Cart feature
	if(isset($_POST["addToCart"])){
		/*$p_id = $_POST["proId"];
		if(isset($_SESSION["uid"])){
		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
				exit();
			}
			
		}*/
		$p_id = $_POST["proId"];
		if(isset($_SESSION["uid"])){
		$user_id = $_SESSION["uid"];
		$query = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$res = $connect->query($query);
			$count = $res->fetchColumn();
			if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
			}else{
			$query = "INSERT INTO cart(p_id, ip_add, user_id, qty)VALUES(:p_id, :ip_add, :user_id, '1')";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':p_id' => $p_id,
					':ip_add' => $ip_add,
					':user_id' => $user_id,
				)
			);
			$result = $statement->fetchAll();
			if(isset($result)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$query = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$res = $connect->query($query);
			$count = $res->fetchColumn();
			if($count > 0){
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$query = "INSERT INTO `cart`(`p_id`, `ip_add`, `user_id`, `qty`)VALUES ('$p_id','$ip_add','-1','1')";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':p_id' => $p_id,
					':ip_add' => $ip_add,
				)
			);
			$result = $statement->fetchAll();
			if(isset($result)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
				exit();
			}
		
		}
		
	}

//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$query = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = '$_SESSION[uid]'";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$query = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	$statement = $connect->query($query);
	$num_rows = $statement->fetchColumn();
	echo $num_rows;
	exit();
}
//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$query = "SELECT a.items_id,a.items_name,a.items_price,a.product_img1,b.id,b.qty FROM items a,cart b WHERE a.items_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$query = "SELECT a.items_id,a.items_name,a.items_price,a.product_img1,b.id,b.qty FROM items a,cart b WHERE a.items_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if(! $result){
			echo '<center><img width="40%" src="images/Icons/No_Item.png" alt="No_Item">
			<h6>No Products Yet</h6></center>';
		}elseif(isset($result)) {
			$n=0;
			foreach($result as $row) {
				$n++;
				$items_id = $row["items_id"];
				$items_name = $row["items_name"];
				$items_price = $row["items_price"];
				$product_img1 = $row["product_img1"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				echo '
					<div class="row ">
						<div class="col mb-1"><img class="shadow" width="80px" src="admin/product_images/'.$product_img1.'" /></div>
						<div class="col-8 mt-3 text-truncate">'.$items_name.'<br>'.CURRENCY.''.$items_price.'</div>
					</div>';
			}
		}
			?>
			<?php
			exit();
		
	}
	if (isset($_POST["checkOutDetails"])) {
		if(! $result){
			echo '
			<img src="images/Icons/No_Item.png" alt="No_Item">
			<h1>There are no items added.</h1>
			<p>You must first add items to your shopping cart before proceeding to checkout.<br>On our website, you can discover a wide variety of items with awesome features.</p>
			<a type="button" href="product.php #checkout" class="btn icon-round m-2 text-white" style="background: #F7941D">Go To Shopping
			</a>';
		}elseif(isset($result)) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='POST' action='login.php'>
					<div class='cart_header container row' style='display: flex;
						align-items: center;'>
						<div class='col-2'>
							<div class='align-middle'><strong>Action</strong></div>
						</div>
						<div class='col'>
							<div class='align-middle'><strong>Product Image</strong></div>
						</div>
						<div class='col-md-3'>
							<div class='align-middle'><strong>Product Name</strong></div>
						</div>
						<div class='col-sm-1'>
							<div class='align-middle'><strong>Quantity</strong></div>
						</div>
						<div class='col-md-2'>
							<div class='align-middle'><strong>Price</strong></div>
						</div>
						<div class='col-md-2'>
							<div class='align-middle'><strong>Sub Total</strong></div>
						</div>
                 	</div>
			";
				$n=0;
				foreach($result as $row){
					$n++;
					$items_id = $row["items_id"];
					$items_name = $row["items_name"];
					$items_price = $row["items_price"];
					$product_img1 = $row["product_img1"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];
					$total = $row["qty"] * $row["items_price"];
					echo 
					'
					<hr>
						<div class="container row" style="display: flex;
						align-items: center;">
								<div class="col-2">
									<div class="align-middle">
										<a remove_id="'.$items_id.'" class="btn btn-danger remove" data-toggle="tooltip" data-placement="bottom" title="Remove Product"><i class="fa fa-trash"></i></a>
										<a update_id="'.$items_id.'" class="btn btn-primary update" data-toggle="tooltip" data-placement="bottom" title="Update Product"><i class="fa fa-edit"></i></a>
									</div>
								</div>
								
								<input type="hidden" name="items_id[]" value="'.$items_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
									<div class="col">
										<img class="img-responsive bg-white shadow" width="150px" src="admin/product_images/'.$product_img1.'">
									</div>
									<div class="col-md-3">'.$items_name.'</div>
									<div class="col"><input type="number" min="1" class="form-control form-control-sm qty bg-white shadow" value="'.$qty.'" ></div>
									<div class="col-md-2"><input type="hidden" class="form-control price" value="'.$items_price.'" readonly="readonly">'.CURRENCY.''.$items_price.'</div>
									<div class="col-md-2"><input type="hidden" class="form-control total" value="'.$items_price.'" readonly="readonly">'.CURRENCY.''.$total.'</div>
							</div>';
				}
				
				echo '<center>
				<hr>
				<div class="col-md-6">
				  <br>
				</div> <div class="text-left mt-1">
				<h3 class="mt-3"><b class="net_total"></b></h3>
				<p>Shipping, taxes, and discounts will be calculated at checkout.</p>
				</div>
								
					';
				if (!isset($_SESSION["uid"])) {
					// echo '
					// <a type="button" href="product.php #products" class="btn btn-secondary icon-round mb-3">Update Cart</a>&nbsp;
                    // <a type="button" href="checkout.php #checkout" class="btn icon-round mb-3 text-white" style="background: #F7941D">Checkout
                    // </a>
					// 		</form>';
					
					echo '<a type="button" href="product.php #products" class="btn btn-secondary icon-round mb-3">Update Cart</a>&nbsp;
                    <a type="button" href="login.php #checkout" class="btn icon-round mb-3 text-white" style="background: #F7941D">Checkout
                    </a>
					</form>';

				}else if(isset($_SESSION["uid"])){
					//Paypal checkout form
					// echo '
					// 	</form>
					// 	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					// 		<input type="hidden" name="cmd" value="_cart">
					// 		<input type="hidden" name="business" value="shoppingcart@khanstore.com">
					// 		<input type="hidden" name="upload" value="1">';
							  
					// 		$x=0;
					// 		$query = "SELECT a.items_id,a.items_name,a.items_price,a.product_img1,b.id,b.qty FROM items a,cart b WHERE a.items_id=b.p_id AND b.user_id='$_SESSION[uid]'";
					// 		$query = mysqli_query($con,$sql);
					// 		foreach($result as $row){
					// 			$x++;
					// 			echo  	
					// 				'<input type="hidden" name="item_name_'.$x.'" value="'.$row["items_name"].'">
					// 			  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
					// 			     <input type="hidden" name="amount_'.$x.'" value="'.$row["items_price"].'">
					// 			     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
					// 			}
							  
					// 		echo   
					// 			'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>
					//                 <input type="hidden" name="notify_url" value="http://localhost/KhanStore/payment_success.php">
					// 				<input type="hidden" name="cancel_return" value="http://localhost/KhanStore/cancel.php"/>
					// 				<input type="hidden" name="currency_code" value="USD"/>
					// 				<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
					// 				<input style="float:right;margin-right:80px;" type="image" name="submit"
					// 					src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout"
					// 					alt="PayPal - The safer, easier way to pay online">
					// 			</form>';
					// echo '
					// <a type="button" href="product.php #products" class="btn btn-secondary icon-round mb-3">Update Cart</a>&nbsp;
                    // <a type="button" href="checkout.php #checkout" class="btn icon-round mb-3 text-white" style="background: #F7941D">Checkout
                    // </a>
					// 		</form>';

					echo '
					<a type="button" href="product.php #products" class="btn btn-secondary icon-round mb-3">Update Cart</a>&nbsp;
                    <a type="button" href="checkout.php #checkout" class="btn icon-round mb-3 text-white" style="background: #F7941D">Checkout
                    </a>
						</form>';
				}
			}
	}
}
if (isset($_POST["Regular"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$query = "SELECT a.items_id,a.items_name,a.items_price,a.product_img1,b.id,b.qty FROM items a,cart b WHERE a.items_id=b.p_id AND b.user_id='$_SESSION[uid]'";
		$query1 = "SELECT * FROM user_details 
				   INNER JOIN table_province ON user_details.province = table_province.province_id
				   INNER JOIN table_municipality ON user_details.city = table_municipality.municipality_id
				   INNER JOIN table_region ON user_details.region = table_region.region_id WHERE user_id = '$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$query = "SELECT a.items_id,a.items_name,a.items_price,a.product_img1,b.id,b.qty FROM items a,cart b WHERE a.items_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();

	$statement1 = $connect->prepare($query1);
	$statement1->execute();
	$result1 = $statement1->fetchAll();
	// print_r($result1);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if(! $result){
			echo '<center><img width="40%" src="images/Icons/No_Item.png" alt="No_Item">
			<h6>No Products Yet</h6></center>';
		}elseif(isset($result)) {
			$n=0;
			foreach($result as $row) {
				$n++;
				$items_id = $row["items_id"];
				$items_name = $row["items_name"];
				$items_price = $row["items_price"];
				$product_img1 = $row["product_img1"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				echo '
					<div class="row ">
						<div class="col mb-1"><img class="shadow" width="80px" src="admin/product_images/'.$product_img1.'" /></div>
						<div class="col-8 mt-3 text-truncate">'.$items_name.'<br>'.CURRENCY.''.$items_price.'</div>
					</div>';
			}
		}
			?>
			<?php
			exit();
		
	}

	if (isset($_POST["userAddress"])) {
		$n=0;
		foreach($result1 as $row) {
		  $n++;
		  $first_name = $row["first_name"];
		  $last_name = $row["last_name"];
		  $user_contact = $row["user_contact"];
		  $home_address = $row["home_address"];
		  $city = $row["municipality_name"];
		  $province = $row["province_name"];
		  $region = $row["region_name"];
		//   $user_address = '$home_address + '' + $city';

		echo '<div class="p-4 border-top border-primary button-container shadow-sm blockquote pb-3 m-1" style="background: #f1f5f9;">
			<h6 class="text-primary"><i class="fas fa-map-marker-alt"></i><strong> Delivery Address</strong>
				<center>
						<div class="form-group row d-flex">
						<div class="col-sm-3 pt-3">
						<input type="text" readonly class="form-control form-control-sm center " style="text-align: center; resize: vertical; background: #f1f5f9; border: none" placeholder="Full Name" value="'.$first_name.' '.$last_name.'" />
						<span style="font-size: 12px"><strong>'.$user_contact.'</strong></span>
						</div>
						
						<div class="col-sm-5 pt-2">
						<textarea type="text" readonly class="form-control center" style=" text-align: center; resize: none; background: #f1f5f9; border: none" placeholder="Full Address">'.$home_address.', '.$city.', '.$province.', '.$region.'</textarea>
						</div>
						<div class="col-sm-2 pt-3">
						<span style="font-size: 12px"><strong>Default</strong></span>
						</div>
						<div class="col-sm-2 pt-2">
						<center><button type="button" name="deliver_add" id="delivery_add"
						data-toggle="modal" data-target="#deliveryModal" class="btn btn-outline-secondary">Change</button></center>
						</div>
					</div>
				</center>
					</div>';
	}
	}
if (isset($_POST["viewCart"])) {
	echo '<tbody>
	<h6 class="text-primary"><i class="fas fa-cubes"></i><strong> Product Preview </strong>
	  <thead>
		  <tr>
			<th class="text-center">Image</th>
			<th class="text-center">Product</th>
			<th class="text-center">Price</th>
			<th class="text-center">Quantity</th>
			<th class="text-center">Sub Total</th>
		  </tr>
	  </thead>';
		$n=0;
		foreach($result as $row) {
		  $n++;
		  $items_id = $row["items_id"];
		  $items_name = $row["items_name"];
		  $items_price = $row["items_price"];
		  $product_img1 = $row["product_img1"];
		  $cart_item_id = $row["id"];
		  $qty = $row["qty"];
		  $subtotal = $row["qty"] * $row["items_price"];
		  $total = $subtotal + $subtotal;
		  echo '                            
			<tr>
			<td class="align-middle text-center"><img src="admin/product_images/'.$product_img1.'" width="150px"  alt="product"></td>
			<td class="align-middle text-center">
				<h6><strong>'.$items_name.' <br>ILAW Product</strong></h6>
			</td>
			<td class="align-middle text-center">'.CURRENCY.''.$items_price.'</td>
			<td class="align-middle text-center" qty>'.$qty.'</td>
			<td class="align-middle text-center" total>'.$subtotal.'</td>
		</tr>'  ;
	}
	echo '
	<h1 class="net_total></h1>
	';
	  }
	  
	  

}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$query = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$query = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if(isset($result)){
		echo "<div class='alert alert-danger'>
						
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$query = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$query = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if(isset($result)){
		echo "<div class='alert alert-info'>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}




?>