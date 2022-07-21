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
    <link href="css/upload.css" rel="stylesheet" />
    <link href="css/orderstatus.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
              <button type="button" name="add_review" id="add_review" class="btn btn-primary shadow" ><i class="fas fa-star"></i> Rate</button>
              <div class="col-sm-4 text-center">
    				</div>
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
        

        <div class="container border">
            <div class="row">
              <div class="col align-middle text-end border">Merchandise Subtotal:</div>
              <div class="col border"><b>₱2,085.00</b></div>
              <div class="w-100"></div>
              <div class="col align-middle text-end border">Shipping Fee:</div>
              <div class="col border"><b>₱40.00</b></div>
              <div class="w-100"></div>
              <div class="col align-middle text-end border bg-dark text-white">Total Payment:</div>
              <div class="col border bg-dark text-white"><b>₱2,125.00</b></div>
            </div> 
        </div>
   
        </div>
      </div>
  </div><br>
  <div id="review_modal" class="modal fade popups "  role="dialog" style="overflow:scroll;">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title"><b>Review Any Product and Shop Services</b></h5>
	        	<a type="button" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true"><i class="fas fa-times"></i></span>
          </a>
	      	</div>
	      	<div class="modal-body ">
	      		<h4 class="text-center mt-2 mb-4 " >
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1" role="button"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2" role="button"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3" role="button"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4" role="button"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5" role="button"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" required/>
	        	</div>
            <br>
            <div class="form-group">
	        		<input type="text" name="title_review" id="title_review" class="form-control" placeholder="Enter Title" required/>
	        </div>
            <br>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" style="resize: none; height:100px" placeholder="Type Review Here" required></textarea>
	        	</div>
            
            <!-- Upload Image and Video -->
            <div class="wrap-upload-buttons">
            <div class="container">
                <br>
                <h5>Picture/Video Upload (Optional)</h5>
                <center><div class = "upload_box">
                <ul id="media-list" class="clearfix" role="button">
                
                        <li class="myupload">
                            <center><span><i class="fas fa-image fa-lg" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload" multiple role="button"></span></center>
                        </li>
                </ul>
                </div>
                <ul id="media-list" class="clearfix">
                        <li class="myupload">
                            <center><span ><i class="fas fa-video fa-lg" aria-hidden="true" ></i><input type="file" click-type="type2" id="vidupload" class="vidupload" multiple accept="video/*" role="button"></span></center>
                        </li>
                </ul>
            </div>
            </div>

	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review"><i class="fas fa-star"></i> Submit Review</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>
</section>
    <?php
          include("footer/footer.php")
    ?>
    <script>
$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        var title_review = $('#title_review').val();
        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name,title_review:title_review, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="d-flex mb-3">';

                        html += '<div class="rounded bg-white text-dark p-3 "><img src="admin/images/Profiles/Patrick.jpg" alt="Admin_Profile" width="70px" class="rounded-circle" /><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += '<div><b>'+data.review_data[count].title_review+'</b></div>';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/orderstatus.js" type="text/javascript"></script>
    <!--Bootstrap-->
    
    <script src="admin/assets/js/bootstrap.min.js"></script>
     <!--Progressbar JS-->
     
     <script src="admin/assets/js/progressbar.min.js"></script>
     
    <!-- For Cart-->
    <script src="linkscript/main.js"></script>
    <!--Custom Js Script-->
    <script src="admin/assets/js/custom.js"></script>
     
</body>
</html>