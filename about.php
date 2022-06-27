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
            $active = "About";
            include("headers/admin_header.php");
          }
          else{
            $active = "About";
            include("headers/customer_header.php");
          }
          }else {
            $active = "About";
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
        <hr id="about">
      </div>  
    </div>
    </section>
    <section  class="third_section"> <!-- section css replicate in homepage -->
        <div class = "line_CS">
            <h1> About Us </h1><br>
            <h6><b>Our Brief History</b></h6>
            <p>It is all ABOUT “ILAW ng Tahanan” which always reminds us of our "Dear Mother", "Nanay", "Ina", "Mama" or "Mommy" that alwaysgives radiant glow and brightness to our homes. We started as a small online dropshipping business where we source our product locally, with the Covid-19 rapidlly spreading in the Philippines major lockdowns was implemented all throughout the Island and we at ILAW deliverslighting decorations door-to-door to every Filipino homes nationwide.</p>
            
            <h6><b>Our Culture</b></h6>
            <p>At ILAW, we are constantly reminding ourselves, providing high quality and safe LED Light Technology to all Filipinos all over the Philippines and also to our new heroes our OFW's. That’s why it’s important that our products and services reflects the global standards for the latest innovation in lighting solution for the people we serve. Research and Product testing is one of our ways to keep up with the trends and  helps us make better decisions,build better products and create better experiences for every Ka-ILAW and Future Ka-ILAW soon.</p>

            <h6><b>Our Mission</b></h6>
            <p>To create long-term benefits to our Filipino customers by delivering excellent products, creating value and services to Filipino households through innovation and cutting-edge technology.</p>
            <h6><b>Our Vision</b></h6>
            <p>To become one of the most trusted, pioneer Philippine brand in automation & lighting, as the leading supplier of safe, innovative, customer-centric, eco-friendly and superior products at affordable price.</p>
        </div>
    </section>
    <?php
          include("footer/footer.php")
    ?>
    <script src="js/functions.js" type="text/javascript"></script>
     <!-- For Cart-->
     <script src="linkscript/main.js"></script>
</body>
</html>