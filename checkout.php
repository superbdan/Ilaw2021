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
    <link href="css/upload.css" rel="stylesheet" />
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
    <section id="checkout" class= "second_section" >
    <div class = "line_PFOS">
          <h1>Shopping Cart</h1>
          <p> ILAW Lighting and Equipment Trading introduce you the virtual shopping cart in which it allows you to save products that you prefer, order it later or collect products to checkout. </p>
        </div>
    </section>
    <section class= "third_section" >
   <form action="">
        <div class="p-3 border button-container shadow-sm pb-1 " style="background: #f1f5f9;">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb pt-1d-flex justify-content-between">
                  <li class="d-flex">
                  &nbsp;&nbsp;&nbsp;
                    <a href="index.php"><img src="images/Logo/ILAW_Logo2.png" alt="ILAW Logo" onclick="window.location='index.php';" width="35px"></a>&nbsp;&nbsp;
                    <span class="vr" style="width: 2px"></span>
                    <span class="breadcrumb-item pt-2" aria-current="page">&nbsp;Checkout</span>
                  </li>

                  <li><a type="button" class="btn btn-secondary pb-2" data-toggle="tooltip" data-placement="bottom" title="Back to Shopping Cart" href="cart.php #cart"><i class="fas fa-arrow-left"></i></a>
                  
                  <a tabindex="0" class="btn btn-primary pb-2" role="button" data-toggle="popover" data-trigger="focus" title="Content Guide" data-content="The Dashboard serve as the summary review of the overall output of the table for easy monitoring."><i class="fa fa-info"></i></a></li>
                </ol>
            </nav>
        </div>
      <div class = "line_CS pt-3">
        <div class="p-4 border-top border-primary button-container shadow-sm blockquote pb-3 m-1" style="background: #f1f5f9;">
          <h6 class="text-primary"><i class="fas fa-map-marker-alt"></i><strong> Delivery Address</strong>
          <center><div class="form-group row d-flex">
              <div class="col-sm-3 pt-3">
                <input type="text" readonly class="form-control form-control-sm center " style="text-align: center; resize: vertical; background: #f1f5f9; border: none" placeholder="Full Name" value="John Patrick M. Lingahan" />
                <span style="font-size: 12px"><strong>09567485622</strong></span>
              </div>
              <div class="col-sm-5 pt-2">
                <textarea type="text" readonly class="form-control center" style=" text-align: center; resize: none; background: #f1f5f9; border: none" placeholder="Full Address">159 General Malvar Street San Vicente Biñan City Laguna</textarea>
              </div>
              <div class="col-sm-2 pt-3">
              <span style="font-size: 12px"><strong>Default</strong></span>
              </div>
              <div class="col-sm-2 pt-2">
              <center><button type="button" name="deliver_add" id="delivery_add"
              data-toggle="modal" data-target="#deliveryModal" class="btn btn-outline-secondary">Change</button></center>
              </div>
          </div></center>
        </div>

        <div id="deliveryModal" class="modal fade ">
    	<div class="modal-dialog ">
    		<form method="post" id="category_form">
    			<div class="modal-content bd-example-modal-lg">
    				<div class="modal-header">
						<h5 class="modal-title text-primary"><i class="fas fa-map-marker-alt"></i><strong> Delivery Address</h5>
    				</div>
    				<div class="modal-body text-center">
    					Default Address:
              <br>
              159 General Malvar Street San Vicente Biñan City Laguna
            <hr>
            <label class="mb-2">Input New Address:</label>
            <input type="text" name="category_name" id="category_name" class="form-control" required />
    				</div>
    				<div class="modal-footer">
    					<input type="submit" name="action" id="action" class="btn btn-primary" value="Save Changes" />
    					<button type="button" class="btn btn-danger"data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>

      <div class="col-sm-12 p-3 mt-4 mb-3 border button-container shadow-sm " style="background: #f1f5f9;"> 
        <div class="table-responsive product-list">
        <table class="table table-striped table-bordered w-100 d-block d-md-table grid" id="productList">
                  <tbody>
                  <h6 class="text-primary"><i class="fas fa-cubes"></i><strong> Product Preview </strong>
                    <thead>
								          <tr>
                          <th class="text-center">Image</th>
                          <th class="text-center">Product</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Quantity</th>
                          <th class="text-center">Sub Total</th>
                        </tr>
							      </thead>
                    <tr>
                        <td class="align-middle text-center"><img src="admin/images/Profiles/tarred.jpeg" width="150px"  alt="product"></td>
                        <td class="align-middle text-center">
                            <h6><strong>LED Strip Light LPL 3 Color 6w LPL6W3 <br>ILAW Product</strong></h6>
                        </td>
                        <td class="align-middle text-center">₱450</td>
                        <td class="align-middle text-center">2x</td>
                        <td class="align-middle text-center">₱900</td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center"><img src="admin/images/Profiles/tarred.jpeg" width="150px"  alt="product"></td>
                        <td class="align-middle text-center">
                            <h6><strong>LED Strip Light LPL 3 Color 6w LPL6W3 <br>ILAW Product</strong></h6>
                        </td>
                        <td class="align-middle text-center">₱450</td>
                        <td class="align-middle text-center">2x</td>
                        <td class="align-middle text-center">₱900</td>
                    </tr>

                    <tr>
                        <td class="align-middle text-center"><img src="admin/images/Profiles/tarred.jpeg" width="150px"  alt="product"></td>
                        <td class="align-middle text-center">
                            <h6><strong>LED Strip Light LPL 3 Color 6w LPL6W3 <br>ILAW Product</strong></h6>
                        </td>
                        <td class="align-middle text-center">₱450</td>
                        <td class="align-middle text-center">2x</td>
                        <td class="align-middle text-center">₱900</td>
                    </tr>
                    </tbody>
                    </table>
        </div>
      </div>      
  <div class="d-flex justify-content-around container-fluid">
    <div class="col-sm-7 p-3 border button-container shadow-sm blockquote" style="background: #f1f5f9;"> <center>
        <h6 class="text-primary"><i class="fas fa-envelope"></i><strong> Customer Note </strong>
              <div class="col-sm-12 pt-2">
              <textarea type="text" readonly class="form-control" style="resize: none; background: #f9f9f9;" placeholder="Full Address">Please dont ruin the box. Thank you!</textarea>
              </div>
              <h6 class="text-primary pt-3"><i class="fas fa-paper-plane"></i><strong> Courier</strong>
       
              <div class="col-sm-12 pt-3">
              <select class="bg-white btn-sm" style="cursor:pointer;" required>
                          <option>-- Courier Services --</option>
                          <option value="1">Lalamove</option>
                          <option value="2">JT Express</option>
                          <option value="3">Toktok</option>
              </select><br>
                  <span class="text-dark" style="font-size: 12px"><strong>Note: Courier fee varies on courier service.</strong></span>
              </div>
              </center>
    </div> 
  </div>
  <div class="border button-container shadow-sm  pb-4" style="background: #f8f8f8">
    <div class="p-3 border button-container shadow-sm pb-0" style="background: #f1f5f9;">
    
            <nav aria-label="breadcrumb ">
                <ul class="pt-1 pb-0 breadcrumb d-flex justify-content-center">
                  
                    <h6 class="text-primary pt-1"><i class="fas fa-credit-card"></i><strong> Payment Method</strong></h6>
                    &nbsp; &nbsp; 
                  <select class="bg-white btn-sm" style="cursor:pointer;" required>
                          <option value="1">Online Banking</option>
                          <option value="2">COD (Cash On Delivery)</option>
              </select>
                </ul>
            </nav>
      </div>
      
      <table class="table table-striped table-bordered w-100 d-sm-table grid">
      <center>
              <h6 class="pt-2" style="font-size: 12px"><strong>Note: Please proceed to pay on any online wallet below.</strong></h6>
              </center>
              
                  <tbody>
                  
                    <thead>
								        <tr>
                          <th class="text-center">Online Bank</th>
                          <th class="text-center">Bank Details</th>
                        </tr>
							      </thead>
                    <tr>
                        <td class="align-middle text-center"><img src="images/Logo/gcash.png" width="80px"  alt="product"></td>
                        <td class="align-middle text-center">
                            <h6><strong>Gcash</strong> <br>09567485622</h6>
                        </td>
                    </tr>

                    <tr>
                      <td class="align-middle text-center"><img src="images/Logo/coins.png" width="80px"  alt="product"></td>
                        <td class="align-middle text-center">
                            <h6><h6><strong>Coins.Ph</strong> <br>09567485622</h6></h6>
                        </td>
                    </tr>

                    <tr>
                      <td class="align-middle text-center"><img src="images/Logo/paymaya.png" width="80px"  alt="product"></td>
                        <td class="align-middle text-center">
                            <h6><h6><strong>PayMaya</strong> <br>09567485622</h6></h6>
                        </td>
                    </tr>
                   
                    </tbody>
      </table>
            <div class="container d-flex flex-wrap justify-content-center" >

                <div class="col-md-6 align-center">
                    <div class="form-group p-2 pt-5 border" style="background: #f1f5f9;">
                        <div class="input-group">
                            <span class="input-group-btn" >
                                <span class="btn btn-outline-secondary btn-file">
                                 <i class="fas fa-upload fa-lg" aria-hidden="true"></i> Upload
                                    <input type="file" id="imgInp">
                                </span>
                                
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <center><h6 class="pt-2" style="font-size: 12px"><strong>Note: Screenshot your proof of payment and upload it here. </strong></h6></center>
                        <div class="form-group pr-5 pl-5 border bg-secondary d-flex justify-content-center" style="padding: 120px 0px 120px 0px">
                        <img style="width: 70%; height: auto;" id='img-upload'/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="form-group p-2 pt-5">
                    <div class="input-group">
                        <span >
                          <label class="pt-1">Bank Name: </label>
                        </span>
                        &nbsp;
                            <input type="text" class="form-control">
                            
                    </div>
                    <center><h6 class="pt-4" style="font-size: 12px"><strong>Note: Bank Name Must be accurate and similar to the screenshot.</strong></h6></center>
                    <br>
              <table class="table table-bordered w-100 d-sm-table grid">
                  <tbody>
                  
                    <tr>
                        <td class="align-middle text-center">
                            <strong>Merchandise Subtotal: </strong> 
                        </td>
                        <td class="align-middle text-center">
                        ₱2,085.00
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <strong>Shipping Fee: </strong> 
                        </td>
                        <td class="align-middle text-center">
                        ₱40.00
                        </td>
                    </tr>
                    <tr class="h5">
                        <td class="align-middle text-center bg-secondary text-white">
                            <strong>Total Payment: </strong> 
                        </td>
                        <td class="align-middle text-center bg-secondary text-white">
                        ₱2,125.00
                        </td>
                    </tr>
                    </tbody>
                    </table>
                    <br>
                    <center>
                    <button type="button" class="btn icon-round mb-3 text-white" style="background: #F7941D">Place Order</button></center>
                    </div>
                </div>

            </div>
          </div>
    </div>
    </form>
  </section>
    <?php
          include("footer/footer.php")
    ?>
    <script src="js/functions.js" type="text/javascript"></script>
<script>
     $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
<!--Popper JS-->
    <script src="admin/assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!-- For Cart-->
    <script src="linkscript/main.js"></script>
</body>
</html>