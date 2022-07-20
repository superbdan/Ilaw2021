<?php

require "database_connection.php";
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
    <link rel="stylesheet" href="admin/assets/css/stylecopy.css">
    <link href="css/owl_carousel.css" rel="stylesheet" />
    <link href="css/style_e-commerce.css" rel="stylesheet" />
    <link href="css/listandgrid.css" rel="stylesheet" />
    
    

<meta charset="UTF-8">
   
</head>
<body>
        <?php
          if(isset($_SESSION['type']))
          {
            if($_SESSION['type'] == 'master')
          {
            $active = "Product";
            include("headers/admin_header.php");
          }
          else{
            $active = "Product";
            include("headers/customer_header.php");
          }
          }else {
            $active = "Product";
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
    <section class= "second_section" id="productnow" >
    <div class = "line_PFOS">
          <h1>Products</h1>
          <p> ILAW Lighting and Equipment Trading presents you the products with different model, specification, and detail price. View images below. </p>
        </div>
    </section>
    <main id="products" class="product_main">
      <div class="p-3">
          <hr>
            <div class = "products_option">
              <div> View As:&nbsp;
              <button class="mybtn" data-toggle="tooltip" data-placement="bottom" title="List View" onclick="Button(0); List();"><i class="fas fa-th-list fa-lg" style="cursor: pointer;"></i></button>
              <button class="mybtn Active" data-toggle="tooltip" data-placement="bottom" title="Grid View" onclick="Button(1); Grid();"><i class="fas fa-th fa-lg" style="cursor: pointer;"></i></button>
        </div>
              <center><div><i> 49 Products</i></div>
              <div class="shadow border">
                        <select style="cursor: pointer">
                          <option value="1">Best Selling</option>
                          <option value="2">Price Low to High</option>
                          <option value="3">Price High to Low</option>
                          <option value="4">Alphabetically A-Z</option>
                          <option value="5">Alphabetically Z-A</option>
                          <option value="6">Date Old to New</option>
                          <option value="7">Date New to Old</option>
                        </select>
        </div></center>
        </div>
          <hr>
          <div class="all_product">
          <div class="dropdown_product">
              <div class = "option_container  shadow border bg-white">
                  <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a onclick="toggle_menu('category');" style="cursor: pointer;"><i class="fa fa-angle-down "> </i>
                                    <span> Product Categories </span>
                                </a>
                                <ul  id="category">
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2 "></i> Default</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Analytics</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Ecommerce</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                    <li class="child_product"><a href="index.php" class="ml-4 text-dark"><i class="fa fa-angle-right mr-2"></i> Cryption</a></li>
                                </ul>
                            </li>
                            <hr>
                  </ul>
                  
                  <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a onclick="toggle_menu('stock');" style="cursor: pointer;"><i class="fa fa-angle-down "> </i>
                                    <span> Availability </span>
                                </a>
                                <ul id="stock">
                                    <li class="child"><input type="checkbox"> In Stocks</li>
                                    <li class="child"><input type="checkbox"> Out of Stocks</li>

                                </ul>
                            </li>
                            <hr>
                  </ul>
                  
                  <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a onclick="toggle_menu('filter_price');" style="cursor: pointer;"><i class="fa fa-angle-down "> </i>
                                    <span> Filter Price </span>
                                </a>
                                <ul id="filter_price">
                                <label for="customRange1" class="form-label">Example range</label>
                                <input type="range" class="form-range" id="customRange1">
                   </ul><hr>
                   
                </ul>
                <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a onclick="toggle_menu('review_ratings');" style="cursor: pointer;"><i class="fa fa-angle-down "> </i>
                                    <span> Review Ratings </span>
                                </a>
                                <br>
                                <ul id="review_ratings">
                                  <li class="five_star" style="cursor:pointer;"> <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span></li>
                                  <li class="four star" style="cursor:pointer;"> <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star"></span></li>
                                  <li class="three_star" style="cursor:pointer;"> <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span></li>
                                  <li class="two star" style="cursor:pointer;"> <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span></li>
                                  <li class="one star" style="cursor:pointer;"> <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span></li>
                                </ul><hr>
                   </ul>
              </div>
          </div>
          <div>
            <div class="item_grid" id="get_product" >
              <!--All Products Loops in the Action.php-->
              
            </div>
        <!-- store bottom filter -->
        <div class="container shadow border mt-2 pt-3 store-filter clearfix" style="background: #fff">
          <span class="store-qty">Showing 20-100 products</span>
          <ul class="store-pagination" id="pageno">
            <li ><a class="active" href="#aside">1</a></li>
            <li ><a class="" href="#aside">2</a></li>
            <li ><a class="" href="#aside">3</a></li>
            <li ><a class="" href="#aside">4</a></li>
            <li ><a class="" href="#aside">5</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div>
        <!-- /store bottom filter -->
          </div>
	<!--End of Main Content-->
    </main>
    

    <?php
          include("footer/footer.php")
    ?>
    <!-- For Cart-->
   <script src="linkscript/main.js"></script>
    <!-- For Product View-->
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/listandgrid.js" type="text/javascript"></script>
    <!-- Page JavaScript Files-->
    <script src="admin/assets/js/jquery.min.js"></script>
    <script src="admin/assets/js/jquery-1.12.4.min.js"></script>
    <!--Bootstrap-->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!--Custom Js Script-->
    <script src="admin/assets/js/custom.js"></script>
    
    <script>

      // Basic example
$(document).ready(function () {
  $('#get_product').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});
    </script>
   
</body>
</html>