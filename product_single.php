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
    <link rel="stylesheet" href="admin/assets/css/stylecopy.css">
    <link href="css/owl_carousel.css" rel="stylesheet" />
    <link href="css/style_e-commerce.css" rel="stylesheet" />
    
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
    <section class= "second_section" >
    <div class = "line_PFOS">
          <h1>Products</h1>
          <p> ILAW Lighting and Equipment Trading presents you the products with different model, specification, and detail price. View images below. </p>
        </div>
    </section>
    <main class="product_main" id="prod_single">
    <br>
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm container">
                    <!--Product detail-->
                    <div class="product-list">
                        <div class="row">
                            <div class="col-sm-5 col-12">
                                <div class="slider-for border">
                                    <img src="images/Products/slick1.jpg" alt="product_single" width="100%">
                                   
                                </div>
                                <div class="slider-nav pl-4 pr-4 bg-secondary shadow">
                                   
                                </div>
                            </div>
                            
                            <div class="col-sm-7 col-12">
                                <div class="p-2">
                                    <div class="text-right">
                                        <p class="small"><strong>Availability</strong>: <span class="text-primary">In Stock</span></p>
                                    </div>
                                    <h3 class="mb-3">Danami Black And Proud Hoodie</h3>
                                    <p class="small"><strong>Brand:</strong> Versacce</p>

                                    <div class="mt-3 mb-4">
                                        <select id="example">
                                            <option value="1">1</option>
                                            <option value="2" selected>2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                    <h4>$50.00</h4>
                                    <hr>

                                    <p class="product-slug">Mauris pretium dignissim pulvinar. Vivamus lectus ante, ullamcorper in turpis eu, tristique gravida dui. Nullam mattis lacus et nisl consequat, id sodales metus luctus. In placerat sed urna at tempor. Duis commodo ut mauris eget scelerisque. Nunc laoreet purus a lacus sagittis, vitae tempor lorem lobortis. Sed vitae diam arcu. Ut sit amet tellus quam.</p>
                                    <hr>

                                    <center><div class="col-sm-6 col-6 pl-0 pr-4 mb-4 mt-4">
                                        <div class="input-group mt-2">
                                            <input type="number" size="3" class="form-control bg-light text-center mr-3" value="1" min="1" maxlength="3">
                                            &nbsp; &nbsp;
                                            <button type="button" class="btn btn-theme rounded-0 mr-3" style="color: white">
                                            <i class="fa fa-shopping-cart mr-3"></i> ADD TO CART
                                        </button>
                                        </div>
                                    </div></center>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!--Product Detail-->
                </div>
                <div class="container mt-4 mb-4 p-3 bg-white button-container  border shadow-sm">
                    <div class="product-list custom-tabs">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-customContent" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home" data-toggle="tab" href="#custom-home" role="tab" aria-controls="nav-home" aria-selected="true"> Reviews</a>

                                <a class="nav-item nav-link" id="nav-profile" data-toggle="tab" href="#custom-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Description</a>

                                <a class="nav-item nav-link" id="nav-contact" data-toggle="tab" href="#custom-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Size Guide</a>
                            </div>
                        </nav>

                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-customContent">
                            <div class="tab-pane fade show active p-3" id="custom-home" role="tabpanel" aria-labelledby="nav-home">
                                
                                <!--Single feed-->
                                <div class="feed-single mb-3">
                                    <div class="media">
                                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/John-doe.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-1">Jay Shetty 
                                                <small class="text-muted pl-3"><i class="fa fa-clock"></i> 2 weeks</small>
                                                
                                                <p class="clearfix"></p>
                                            </h6>

                                            <div class="user-rating">
                                                <select class="reviewRating">
                                                    <option value="1">1</option>
                                                    <option value="2" selected>2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <p>Good quality material, insulates well. There is room for improvement.</p>

                                            <div class="feed-footer">
                                                <span class="pr-3 text-success"><i class="fa fa-check-circle"></i>
                                                Verified Purchase </span>
                                                
                                                <p class="clearfix"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Single feed-->

                                <!--Single feed-->
                                <hr>
                                <div class="feed-single mb-3">
                                    <div class="media">
                                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/client-img2.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-1">Maria Riverra 
                                                <small class="text-muted pl-3"><i class="fa fa-clock"></i> November 7, 2018</small>
                                                
                                                <p class="clearfix"></p>
                                            </h6>

                                            <div class="user-rating">
                                                <select class="reviewRating">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected>4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <p>i like it, very nice</p>

                                            <div class="feed-footer">
                                                <span class="pr-3 text-success"><i class="fa fa-check-circle"></i>
                                                Verified Purchase </span>
                                                
                                                <p class="clearfix"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Single feed-->

                                <!--Single feed-->
                                <hr>
                                <div class="feed-single mb-3">
                                    <div class="media">
                                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/client-img4.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-1">John Doe 
                                                <small class="text-muted pl-3"><i class="fa fa-clock"></i> October 5, 2018</small>
                                                
                                                <p class="clearfix"></p>
                                            </h6>

                                            <div class="user-rating">
                                                <select class="reviewRating">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected>4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <p>Dope</p>

                                            <div class="feed-footer">
                                                <span class="pr-3 text-success"><i class="fa fa-check-circle"></i>
                                                Verified Purchase </span>
                                                
                                                <p class="clearfix"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Single feed-->

                            </div>
                            <!--/Feed tab-->

                            <!--Personal info tab-->
                            <div class="tab-pane fade p-3" id="custom-profile" role="tabpanel" aria-labelledby="nav-profile">
                                
                                <h6 class="mb-3">Product Details</h6>
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Model:</th>
                                            <td>Model 2.3</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">color:</th>
                                            <td>red</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">features</th>
                                            <td>New Model ,High heals</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Advanced</th>
                                            <td>Feel Comfortability </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!--/Personal info tab-->

                            <!--Resume tab-->
                            <div class="tab-pane fade p-3" id="custom-contact" role="tabpanel" aria-labelledby="nav-contact">
                                
                                <p class="p-typo">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>

                                <p class="p-typo">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="navigator"></div>
        <br>

        <!--Main Content-->
    </main>

    <?php
          include("footer/footer.php")
    ?>
    <script src="js/functions.js" type="text/javascript"></script>
    <!-- Page JavaScript Files-->
    <script src="admin/assets/js/jquery.min.js"></script>
    <script src="admin/assets/js/jquery-1.12.4.min.js"></script>
    <!--Bootstrap-->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!--Custom Js Script-->
    <script src="admin/assets/js/custom.js"></script>
     <!-- For Cart-->
     <script src="linkscript/main.js"></script>
</body>
</html>