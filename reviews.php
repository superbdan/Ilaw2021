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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
        <?php
          if(isset($_SESSION['type']))
          {
            if($_SESSION['type'] == 'master')
          {
            $active = "Reviews";
            include("headers/admin_header.php");
          }
          else{
            $active = "Reviews";
            include("headers/customer_header.php");
          }
          }else {
            $active = "Reviews";
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
    <section id="reviews" class= "second_section" >
    <div class = "line_PFOS">
          <h1>Reviews</h1>
          <p>ILAW Lighting and Equipment Trading provides you a rating page in which you will see any customer's feedback to help your further decisions, and you can also give feedback if you are registered on the website.</p>
        </div>
    </section>
    <main class="product_main">
    <div class="mt-4 mb-4 p-3 border shadow lh-sm">
        <div class="container ">
    	<div class="card border shadow">
    		<div class="card-header border">Reviews and Ratings</div>
    		<div class="card-body ">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Reviews</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary mt-4">Write a Review</button>
                        
    				</div>
                    <div class="mt-3 text-center">
                        <select class="bg-white bulk-actions">
                          <option>Most Recent</option>
                          <option value="1">Highest Rating</option>
                          <option value="2">Lowest Rating</option>
                        </select>
              </div>
                    <div class="mt-4" id="review_content"></div>
    			</div>
    		</div>
    	</div>
    	
    </div>

    <div id="review_modal" class="modal fade popups "  role="dialog" style="overflow:scroll;">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Review Any Product and Shop Services</h5>
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
	        		<button type="button" class="btn btn-primary" id="save_review">Submit Review</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

    </div>
    </main>
    <?php
          include("footer/footer.php")
    ?>
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/upload.js" type="text/javascript"></script>
    <!--Popper JS-->
    <script src="admin/assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    

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
 <!-- For Cart-->
 <script src="linkscript/main.js"></script>
</body>
</html>