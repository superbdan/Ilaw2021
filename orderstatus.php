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
      <label class="p-2"><strong>Track your order by searching the  <span class="text-primary">Order ID <i>(ex. ILAW-002931)</i></span> in the search bar.</strong></label>
      <br><br>
  <form>
    <div class="container d-flex">
    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
    </div>
  </form>
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