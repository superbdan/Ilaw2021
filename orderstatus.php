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
      <label><strong>ORDER ID: 032930293922</strong>| <span style="color: green;">Complete</span></label>
      <br><br>
        <h3>Hello <strong>John Patrick</strong>, your order was <strong>fully completed</strong>, Thank you for trusting ILAW, Have a great day!</h3>
       
        <div class="mt-1 mb-3 p-2 button-container container" style="background: #f1f5f9">
            
            <ul class="cbp_tmtimeline">
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>04/05/2021 </span> <span>7:31 AM</span></time>
                    <div class="cbp_tmicon"><i class="fas fa-clipboard-list"></i></div>
                    <div class="cbp_tmlabel shadow border">
                        <h2>Order Placed</h2>
                        <p>Your order has been sent to ILAW.</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>4/11/13</span> <span>12:04</span></time>
                    <div class="cbp_tmicon"><i class="fas fa-money-bill"></i></div>
                    <div class="cbp_tmlabel shadow border">
                        <h2>Order Paid</h2>
                        <p>Caulie dandelion maize...</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>5:36 AM</span></time>
                    <div class="cbp_tmicon"><i class="fas fa-truck"></i></div>
                    <div class="cbp_tmlabel shadow border">
                        <h2>Order Shipped Out</h2>
                        <p>Parsnip lotus root...</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-15 13:15"><span>4/15/13</span> <span>1:15 PM</span></time>
                    <div class="cbp_tmicon"><i class="fas fa-vote-yea"></i></div>
                    <div class="cbp_tmlabel shadow border">
                        <h2>Order Received</h2>
                        <p>Peanut gourd nori...</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2013-04-16 21:30"><span>4/16/13</span> <span>4:16 PM</span></time>
                    <div class="cbp_tmicon"><i class="fas fa-star"></i></div>
                    <div class="cbp_tmlabel shadow border">
                        <h2>Rate Now!</h2>
                        <p>Parsley amaranth tigernut...</p>
                    </div>
                </li>
            </ul>
                    </div>
                   <br>
                    <div class="clearfix"></div>
            </div>
        </form>
    </div>
</div> <!-- wizard container -->
</div>
<!--/Form wizard-->
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