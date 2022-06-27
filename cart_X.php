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
    <section id="cart" class= "second_section" >
    <div class = "line_PFOS">
          <h1>Shopping Cart</h1>
          <p> ILAW Lighting and Equipment Trading introduce you the virtual shopping cart in which it allows you to save products that you prefer, order it later or collect products to checkout. </p>
        </div>
    </section>
    <section class= "third_section" >
      <!--<div class="no_item fade">
      <br>
      <br>
      <br>
        <h1>There are no items added.</h1>
        <p>You must first add items to your shopping cart before proceeding to checkout.<br>
On our website, you can discover a wide variety of items with awesome features.</p>
<button class ="shopnow_btn" onclick="window.location='product.php #productnow';" type="button">Go Shopping Now!</button> 
        <br><br><br>
      </div> -->
      <div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
      <div class="item_cart">
      <div class="display_product">
            <div class = "product_container2">
            <div class="table-responsive product-list m-3">
              <table class="table table-striped table-bordered w-100 d-block d-md-table grid" id="productList">
                  <tbody>
                    <thead>
								          <tr>
                          <th class="text-center">Image</th>
                          <th class="text-center">Product</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Quantity</th>
                          <th class="text-center">Sub Total</th>
                          <th class="text-center"> </th>
                        </tr>
							      </thead>
                    <tr>
                        <td class="w-25"><img src="admin/images/Profiles/tarred.jpeg" width="100%" alt="product"></td>
                        <td class="align-middle">
                            <h6><strong>LED Strip Light LPL 3 Color 6w LPL6W3 <br>ILAW Product</strong></h6>
                        </td>
                        <td class="align-middle">₱450</td>
                        <td class="align-middle">
                        <center>
                        <div class="col-sm-3">
                          <input class="form-control quantity" type="number" id="quantity_' + rowCount + '" name="quantity[]" min="1" value="1" for="' + rowCount + '" required/>
                        </center>
                        </div>
                        </td>
                        <td class="align-middle">₱900</td>
                        <td class="align-middle"><button type="button" class="btn btn-danger icon-round shadow">
                        <strong>&times;</strong>
                        </button></td>
                        </tr>
                        <tr>
                        <td class="w-25"><img src="admin/images/Profiles/tarred.jpeg" width="100%" alt="product"></td>
                        <td class="align-middle">
                            <h6><strong>LED Strip Light LPL 3 Color 6w LPL6W3 <br>ILAW Product</strong></h6>
                        </td>
                        <td class="align-middle">₱450</td>
                        <td class="align-middle">
                        <center>
                        <div class="col-sm-3">
                          <input class="form-control quantity" type="number" id="quantity_' + rowCount + '" name="quantity[]" min="1" value="1" for="' + rowCount + '" required/>
                        </center>
                        </div>
                        </td>
                        <td class="align-middle">₱900</td>
                        <td class="align-middle"><button type="button" class="btn btn-danger icon-round shadow">
                        <strong>&times;</strong>
                        </button></td>
                        </tr>
                        <tr>
                        <td class="w-25"><img src="admin/images/Profiles/tarred.jpeg" width="100%" alt="product"></td>
                        <td class="align-middle">
                            <h6><strong>LED Strip Light LPL 3 Color 6w LPL6W3 <br>ILAW Product</strong></h6>
                        </td>
                        <td class="align-middle">₱450</td>
                        <td class="align-middle">
                        <center>
                        <div class="col-sm-3">
                          <input class="form-control quantity" type="number" id="quantity_' + rowCount + '" name="quantity[]" min="1" value="1" for="' + rowCount + '" required/>
                        </center>
                        </div>
                        </td>
                        <td class="align-middle">₱900</td>
                        <td class="align-middle"><button type="button" class="btn btn-danger icon-round shadow">
                        <strong>&times;</strong>
                        </button></td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                    <center>
                    <div class="col-md-6">
                      <label class="btn btn-secondary icon-round mb-3 pe-none">Add Note
                      </label>
                      <br>
                      <textarea class="p-2" name="take_note" style="resize:none; height: 100px; width: 100%" id="take_note"  placeholder="Write your message here..." ></textarea>
                    </div>
                    <div class="text-left mt-4">
                                    <h3 class="mt-2"><strong>TOTAL: ₱2,085.00</strong></h3>
                                    <p>Shipping, taxes, and discounts will be calculated at checkout.</p>
                    </div>
                    <a type="button" href="product.php #products" class="btn btn-secondary icon-round mb-3">Update Cart</a>
                    <a type="button" href="checkout.php #checkout" class="btn icon-round mb-3 text-white" style="background: #F7941D">Checkout
                    </a>
                </div>
              </div>
      </div>
    </section>
    <?php
          include("footer/footer.php")
    ?>
    <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>