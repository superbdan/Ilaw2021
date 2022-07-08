<?php
    include('database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILAW</title>
    <link rel = "shortcut icon" type="image/x-icon" href="images/Logo/ILAW_Logo2.png" />
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
    <link href="css/listandgrid.css" rel="stylesheet" />
    <link href="css/style_e-commerce.css" rel="stylesheet" />
    
</head>
<body>
<?php
          if(isset($_SESSION['type']))
          {
            if($_SESSION['type'] == 'master')
          {
            $active = "";
            include("headers/admin_header.php");
          }
          else{
            $active = "";
            include("headers/customer_header.php");
          }
          }else {
            $active = "";
            include("headers/guest_header.php");
          }
          ?>
    <section class="first_section">
    <div class ="BG_Cover">
        <img class="mySlides" src="images/Others/BG_Stairs.png">
        <img class="mySlides" src="images/Others/BG_Houses.png">
        <img class="mySlides" src="images/Others/BG_TV.png">
        <div class= "column">
        <h1>ILAW Lighting and Equipment Trading</h1>
        <h2>"Making life brighter one Filipino home at a time."</h2>
        <button class ="shopnow_btn" onclick="window.location='product.php #productnow';" type="button">Shop Now</button>    
        </div>       
    </div>
    </section>
    <section id="orderstatus" class= "second_section" >
    <div class = "line_PFOS">
          <h1>Order Status</h1>
          <p> ILAW Lighting and Equipment Trading provides you a monitoring system for you to know the progress of your order.</p>
        </div>
    </section>
    <section class= "third_section" >
      <br>
      <!-- <label class="p-2"><strong>Track your order by searching the  <span class="text-primary">Order ID <i>(ex. ILAW-002931)</i></span> in the search bar.</strong></label> -->

      <!-- Insert this code if there are no orders pending 
      <img src="images/Icons/Qbox.png" width="300px" alt="No_Item">
			<h1>You haven't ordered anything yet.</h1>
			<p>You must have a pending order sent to ILAW.<br>Thank you very much and have a blast shopping!</p>
			<a type="button" href="product.php #checkout" class="btn icon-round m-2 text-white" style="background: #F7941D">Go To Shopping
			</a>
      <br><br>-->
      
  <!-- <form>
    <div class="container d-flex">
    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
    </div>
  </form> -->
  <div class="container">
    <a href="orderstatus2.php #orderstatus2">
    	<div class="card border shadow">
    		<ul class="card-header border d-flex justify-content-between">
          <li class="text-dark"><b>Order ID: <i>19028369</i><li>&nbsp;
          <li class="text-primary"><i class="fas fa-truck"></i> Parcel has been delivered <span class="text-dark">|<span><span class="text-success"> Order Completed</span></li></b>
        </ul>
    		<div class="card-body">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 200px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
                  <div class="col-12 short-div"><u>And <b>4</b> Products</u></div>
            </div>
          </div>
          </div>
        </div>
        <ul class="card-header d-flex justify-content-between">
          <li class="text-dark mt-2">Date Placed: <b>07/07/2022</b></li>
          <li><button type="button" onclick="window.location='reviews.php';"class="btn btn-primary" ><i class="fas fa-star"></i> Rate Service</button>
        <button type="button" onclick="window.location='reviews.php';"class="btn btn-success" ><i class="fas fa-shopping-cart"></i> Buy Again</button></li>
        </ul>
        </div>
      </div>
        </a>
  </div><br>

  <div class="container">
    <a href="orderstatus2.php #orderstatus2">
    	<div class="card border shadow">
    		<ul class="card-header border d-flex justify-content-between">
          <li class="text-dark"><b>Order ID: <i>19028370</i><li>&nbsp;
          <li class="text-primary"><i class="fas fa-truck"></i> Parcel has been sent to courier | <span class="text-primary"> Order Shipped Out</span></li></b>
        </ul>
    		<div class="card-body">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 200px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
                  <div class="col-12 short-div"><u>And <b>4</b> Products</u></div>
            </div>
          </div>
          </div>
        </div>
        <ul class="card-header d-flex justify-content-between">
          <li class="text-dark mt-2">Date Placed: <b>07/07/2022</b></li>
          <li><button type="button" onclick="window.location='reviews.php';"class="btn btn-primary" ><i class="fas fa-star"></i> Rate Service</button>
        <button type="button" onclick="window.location='reviews.php';"class="btn btn-success" ><i class="fas fa-shopping-cart"></i> Buy Again</button></li>
        </ul>
        </div>
      </div>
      </div>
        </a>
  </div><br>

  <div class="container">
    <a href="#">
    	<div class="card border shadow">
    		<ul class="card-header border d-flex justify-content-between">
          <li class="text-dark"><b>Order ID: <i>19028371</i><li>&nbsp;
          <li class="text-primary"><i class="fas fa-truck"></i> Parcel has been processed | <span class="text-primary"> Order Paid</span></li></b>
        </ul>
    		<div class="card-body">
    		<div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 200px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
                  <div class="col-12 short-div"><u>And <b>4</b> Products</u></div>
            </div>
          </div>
          </div>
        </div>
        <ul class="card-header d-flex justify-content-between">
          <li class="text-dark mt-2">Date Placed: <b>07/07/2022</b></li>
          <li><button type="button" onclick="window.location='reviews.php';"class="btn btn-primary" ><i class="fas fa-star"></i> Rate Service</button>
        <button type="button" onclick="window.location='reviews.php';"class="btn btn-success" ><i class="fas fa-shopping-cart"></i> Buy Again</button></li>
        </ul>
        </div>
      </div>
      </div>
        </a>
  </div><br>

  <div class="container">
    <a href="#">
    	<div class="card border shadow">
    		<ul class="card-header border d-flex justify-content-between">
          <li class="text-dark"><b>Order ID: <i>19028372</i><li>&nbsp;
          <li class="text-primary"><i class="fas fa-truck"></i> Parcel will be processed | <span class="text-primary"> Order Placed</span></li></b>
        </ul>
    		<div class="card-body">
          <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 200px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
                  <div class="col-12 short-div"><u>And <b>4</b> Products</u></div>
            </div>
          </div>
          </div>
        </div>
        <ul class="card-header d-flex justify-content-between">
          <li class="text-dark mt-2">Date Placed: <b>07/07/2022</b></li>
          <li><button type="button" onclick="window.location='reviews.php';"class="btn btn-primary" ><i class="fas fa-star"></i> Rate Service</button>
        <button type="button" onclick="window.location='reviews.php';"class="btn btn-success" ><i class="fas fa-shopping-cart"></i> Buy Again</button></li>
        </ul>
        </div>
      </div>
      </div>
        </a>
  </div><br>

  <div class="container">
    <a href="#">
    	<div class="card border shadow">
    		<ul class="card-header border d-flex justify-content-between">
          <li class="text-dark"><b>Order ID: <i>19028373</i><li>&nbsp;
          <li class="text-primary"><i class="fas fa-truck"></i> Parcel has been cancelled | <span class="text-danger"> Order Cancelled</span></li></b>
        </ul>
    		<div class="card-body">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 200px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
                  <div class="col-12 short-div"><u>And <b>4</b> Products</u></div>
            </div>
          </div>
          </div>
        </div>
        <ul class="card-header d-flex justify-content-between">
          <li class="text-dark mt-2">Date Placed: <b>07/07/2022</b></li>
          <li><button type="button" onclick="window.location='reviews.php';"class="btn btn-primary" ><i class="fas fa-star"></i> Rate Service</button>
        <button type="button" onclick="window.location='reviews.php';"class="btn btn-success" ><i class="fas fa-shopping-cart"></i> Buy Again</button></li>
        </ul>
        </div>
      </div>
      </div>
        </a>
  </div><br>
    <br>
</section>
    <?php
          include("footer/footer.php")
    ?>
    
    <script src="js/functions.js" type="text/javascript"></script>
    <!--Bootstrap-->
    
    <script src="admin/assets/js/bootstrap.min.js"></script>
     <!--Progressbar JS-->
     
     <script src="admin/assets/js/progressbar.min.js"></script>
     <!--Paper bootstrap wizard-->
    <script src="admin/assets/js/jquery.bootstrap.wizard.js"></script>
    <script src="admin/assets/js/paper-bootstrap-wizard.js"></script>
    <script src="admin/assets/js/jquery.validate.min.js"></script>
    <!-- For Cart-->
    <script src="linkscript/main.js"></script>
    <!--Custom Js Script-->
    <script src="admin/assets/js/custom.js"></script>
     
</body>
</html>