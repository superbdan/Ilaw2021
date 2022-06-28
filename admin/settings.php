<?php
$active = "Settings";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Settings</strong></h5>
                </ol>
            </nav>
<!--Button Modifier -->
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_bestsellersModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Best Sellers Item</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_newarrivalModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify New Arrival Item</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_testimonialModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Testimonial Section</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_customersuppModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Customer Support</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_faqsModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Frequently Asked Questions</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_companyModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Company Team</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_aboutusModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify About Us</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_onlinebanksModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Online Banks Displayed in Checkout Page</a>

<!-- Company Form -->
<div id="m_companyModal" class="modal fade">
    	<div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form action="" method="post" enctype="multipart/form-data">
    			<div class="modal-content">
					<div class="modal-header">
						<h5>Update Company Team</h5>
    				</div>
    				<div class="modal-body">
                    <!-- Our Brief History -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput1" value="<?php echo $label_about1; ?>" name="label_about1" placeholder="Our Brief History" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about1" placeholder="Details" id="floatingTextarea1" style="height: 150px; resize:none;" required><?php echo $details_about1; ?></textarea>
                    </div>
                    <!-- End of Our Brief History -->

                    <!-- Our Culture -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput2" value="<?php echo $label_about2; ?>" name="label_about2" placeholder="Our Culture" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about2" placeholder="Details" id="floatingTextarea2" style="height: 150px; resize:none;" required><?php echo $details_about2; ?></textarea>
                    </div>
                    <!-- End of Our Culture -->

                    <!-- Our Mission -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput3" value="<?php echo $label_about3; ?>" name="label_about3" placeholder="Our Mission" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about3" placeholder="Details" id="floatingTextarea3" style="height: 150px; resize:none;" required><?php echo $details_about3; ?></textarea>
                    </div>
                    <!-- End of Our Mission -->

                     <!-- Our Vision -->
                     <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput4" value="<?php echo $label_about4; ?>" name="label_about4" placeholder="Our Vision" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about4" placeholder="Details" id="floatingTextarea4" style="height: 150px; resize:none;" required><?php echo $details_about4; ?></textarea>
                    </div>
                    <!-- End of Our Vision -->

    					<div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to Add this Data?')">Update</button>
                        <form action="" method="post">
                            <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to Delete all of this Data?')">Delete</button>
                        </form>
    					</div>
    				</div>
					</div>
    		</form>
    	</div>
    </div>
<!-- End of Company Form -->

<!-- About Us Form -->
<div id="m_aboutusModal" class="modal fade">
    	<div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form action="" method="post" enctype="multipart/form-data">
    			<div class="modal-content">
					<div class="modal-header">
						<h5>Update About Us</h5>
    				</div>
    				<div class="modal-body">
                    <!-- Our Brief History -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput1" value="<?php echo $label_about1; ?>" name="label_about1" placeholder="Our Brief History" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about1" placeholder="Details" id="floatingTextarea1" style="height: 150px; resize:none;" required><?php echo $details_about1; ?></textarea>
                    </div>
                    <!-- End of Our Brief History -->

                    <!-- Our Culture -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput2" value="<?php echo $label_about2; ?>" name="label_about2" placeholder="Our Culture" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about2" placeholder="Details" id="floatingTextarea2" style="height: 150px; resize:none;" required><?php echo $details_about2; ?></textarea>
                    </div>
                    <!-- End of Our Culture -->

                    <!-- Our Mission -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput3" value="<?php echo $label_about3; ?>" name="label_about3" placeholder="Our Mission" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about3" placeholder="Details" id="floatingTextarea3" style="height: 150px; resize:none;" required><?php echo $details_about3; ?></textarea>
                    </div>
                    <!-- End of Our Mission -->

                     <!-- Our Vision -->
                     <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput4" value="<?php echo $label_about4; ?>" name="label_about4" placeholder="Our Vision" required> 
                    </div>
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_about4" placeholder="Details" id="floatingTextarea4" style="height: 150px; resize:none;" required><?php echo $details_about4; ?></textarea>
                    </div>
                    <!-- End of Our Vision -->

    					<div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to Add this Data?')">Update</button>
                        <form action="" method="post">
                            <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to Delete all of this Data?')">Delete</button>
                        </form>
    					</div>
    				</div>
					</div>
    		</form>
    	</div>
    </div>
<!-- End of About Us Form -->

<!-- Online Banks Form -->
    <div id="m_onlinebanksModal" class="modal fade">
    	<div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form action="" method="post" enctype="multipart/form-data">
    			<div class="modal-content">
					<div class="modal-header">
						<h5>Update Online Banks List</h5>
    				</div>
    				<div class="modal-body">
                    <!-- Online Bank Logo -->
                    <label for="floatingSelect1 mt-2" class="mt-3">Insert Online Bank Logo*</label>
                    <div class="form-floating mt-2 mb-2">
                        <input type="file" id="file" name="img" accept= "*/image">
                    </div>
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput5" value="<?php echo $label_onlinebank; ?>" name="label_onlinebank" placeholder="Phone Number" required> 
                    </div>
                    <!-- End of Online Bank Logo -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to Add this Data?')">Add</button>
                        <form action="" method="post">
                            <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to Delete all of this Data?')">Delete</button>
                        </form>
    					</div>
    				</div>
					</div>
    		</form>
    	</div>
    </div>
<!-- End of Online Banks Form -->


<?php
    include("footer.php")
?>
</div>
