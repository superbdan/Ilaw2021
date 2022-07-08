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
    <link href="css/orderstatus.css" rel="stylesheet" />
    <!-- UniIcon CDN Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
    <section id="orderstatus2" class= "second_section" >
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
    	<div class="card border shadow">
    		<ul class="card-header border d-flex justify-content-between">
          <li class="text-dark"><b><buton type="button" class="btn btn-secondary" title="Return to previous page" type="button" onclick="window.location='orderstatus.php #orderstatus';"><i class="fas fa-arrow-left"></i> Back</button></b><li>&nbsp;
          <li class="text-primary m-2"><b>Order ID: <i>19028369</i><span class="text-dark"> |<span><span class="text-success"> Order Completed</span></li></b>
        </ul>
        <br>
          <ul class="ul_progress">
            <li class="li_progress">
                <i class="icon uil uil-clipboard-notes"></i>
                <div class="step_progress one">
                    <p>1</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Placed <br>07/08/2022 3:50 PM</p>
            </li>
            <li class="li_progress">
                <i class="icon uil uil-money-bill"></i>
                <div class="step_progress two">
                    <p>2</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Paid <br>07/08/2022 4:50 PM</p>
            </li>
            <li class="li_progress">
                <i class="icon uil uil-truck-loading"></i>
                <div class="step_progress three">
                    <p>3</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Shipped Out <br>07/08/2022 5:50 PM</p>
            </li>
            <li class="li_progress">
                <i class="icon uil uil-package"></i>
                <div class="step_progress four">
                    <p>4</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Received <br>07/08/2022 6:50 PM</p>
            </li>
            <li class="li_progress">
                <i class="icon uil uil-star"></i>
                <div class="step_progress five">
                    <p>5</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Rate Now! <br><span class="fade">07/08/2022 6:50 PM</span></p>
            </li>
        </ul>
        <div class="border-top border-primary button-container p-2 shadow-sm" style="background: #f1f5f9;">
        <div class="card-body border">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 150px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-name">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
            </div>
          </div>
          <div class="col-3 text-dark mt-2">
            <div class="row">
            <div class="btn btn-light short-div">₱160</div>
              <button type="button" onclick="window.location='reviews.php';"class="btn btn-primary shadow" ><i class="fas fa-star"></i> Rate</button>
            </div>
          </div>
        </div>
        </div>

        <div class="card-body border">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 150px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-name">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
            </div>
          </div>
          <div class="col-3 text-dark mt-2">
            <div class="row">
            <div class="btn btn-light short-div">₱160</div>
              <button type="button" onclick="window.location='reviews.php';"class="btn btn-primary shadow" ><i class="fas fa-star"></i> Rate</button>
            </div>
          </div>
        </div>
        </div>
        
        <div class="card-body border">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 150px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-name">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
            </div>
          </div>
          <div class="col-3 text-dark mt-2">
            <div class="row">
            <div class="btn btn-light short-div">₱160</div>
              <button type="button" onclick="window.location='reviews.php';"class="btn btn-primary shadow" ><i class="fas fa-star"></i> Rate</button>
            </div>
          </div>
        </div>
        </div>

        <div class="card-body border">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 150px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-name">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
            </div>
          </div>
          <div class="col-3 text-dark mt-2">
            <div class="row">
            <div class="btn btn-light short-div">₱160</div>
              <button type="button" onclick="window.location='reviews.php';"class="btn btn-primary shadow" ><i class="fas fa-star"></i> Rate</button>
            </div>
          </div>
        </div>
        </div>

        <div class="card-body border">
        <div class="row">
          <img alt='product_image' src="admin/images/Profiles/tarred.jpeg" style='width: 150px;'/>
          <div class="col text-dark text-start">
						<div class='row'>
                <div class="col-12 short-div text-bold"><b>LED Strip Light </b></div>
                <div class="col-12 short-div item-name">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi accusantium facere culpa ullam ipsum, consequuntur ipsa ad provident commodi reiciendis alias est accusamus maiores modi unde natus. Iste, voluptates maxime?</div>
                <div class="col-12 short-div">x1</div>
            </div>
          </div>
          <div class="col-3 text-dark mt-2">
            <div class="row">
            <div class="btn btn-light short-div">₱160</div>
              <button type="button" onclick="window.location='reviews.php';"class="btn btn-primary shadow" ><i class="fas fa-star"></i> Rate</button>
            </div>
          </div>
        </div>
        </div>
        <br>
        
        <table class="table table-bordered w-100 d-sm-table grid">
                  <tbody>
                    
                    <tr>
                        <td class="align-middle text-end">
                            <strong>Merchandise Subtotal: </strong> 
                        </td>
                        <td class="align-middle text-center">
                        ₱2,085.00
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-end">
                            <strong>Shipping Fee: </strong> 
                        </td>
                        <td class="align-middle text-center">
                        ₱40.00
                        </td>
                    </tr>
                    <tr class="h6">
                        <td class="align-middle text-end bg-secondary text-white">
                            <strong>Total Payment: </strong> 
                        </td>
                        <td class="align-middle text-center bg-secondary text-white">
                        ₱2,125.00
                        </td>
                    </tr>
                    </tbody>
                    </table>

        </div>
      </div>
  </div><br>
</section>
    <?php
          include("footer/footer.php")
    ?>
    
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/orderstatus.js" type="text/javascript"></script>
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