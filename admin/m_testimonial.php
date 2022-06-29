<?php
$active = "Settings";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Testimonial</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" id="add_button" name="modify" data-toggle="modal" data-target="#m_companyModal"  class="btn btn-info ml-3 p-1"><i class="fa fa-pencil"></i> Modify Testimonial Section</a></li>
                    </ul>
                </ol>
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item" aria-current="page"><a href="settings.php">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Modify Testimonial</a></li>
        </ol>
            </nav>
            <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                <!--Datatable-->
                            <div class="table-responsive ">
                                <table id="companyteam_data" class="table table-bordered table-hover w-100 table-sm">
                                <thead>
								<tr>
                                    <th class="print_border text-center">Image</th>
									<th class="print_border text-center">Full Name</th>
									<th class="print_border text-center">Title</th>
                                    <th class="print_border text-center">Feedback</th>
                                    <th class="print_border text-center">Ratings</th>
									<th class="print_border text-center">Action</th>
								</tr>
								</thead>
                                <tbody>
                                    <td class="text-center"><img src="images/Profiles/Patrick.jpg" alt="Admin_Profile" width="50px" class="rounded-circle" /></td>
                                    <td class="text-center">Patrick Lingahan</td>
                                    <td class="text-center">"Commended Company"</td>
                                    <td class="text-center">Commended because of their quality items and services provided.</td>
                                    <td class="text-center">⭐⭐⭐⭐⭐</td>
                                    <td class="text-center">sample</td>
                                </tbody>
								<tfoot>
									<tr>
                                    <th class="print_border text-center">Image</th>
									<th class="print_border text-center">Full Name</th>
									<th class="print_border text-center">Title</th>
                                    <th class="print_border text-center">Feedback</th>
                                    <th class="print_border text-center">Ratings</th>
									<th class="print_border text-center">Action</th>
									</tr>
								</tfoot>
								</table>
							</div>
            		<!--/Datatable-->
            </div>

    <!-- Company Form -->
<div id="m_companyModal" class="modal fade">
    	<div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form action="" method="post" enctype="multipart/form-data">
    			<div class="modal-content">
					<div class="modal-header">
						<h3>Add Company Team</h3>
    				</div>
    				<div class="modal-body">
                         

                    <!-- Profile Image -->
                    <label for="floatingSelect1 mt-2">Insert Profile Image:</label>
                    <div class="form-floating mb-2">
                        <input type="file" class="form-control" id="file" name="img" accept= "*/image">
                    </div>
                    <!-- End of Profile Image -->

                    <!-- Full Name -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput1" value="<?php echo $label_testimony1; ?>" name="label_testimony1" placeholder="Full Name" required> 
                    </div>
                    <!-- End of Full Name -->

                    <!-- Title -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput2" value="<?php echo $label_testimony2; ?>" name="label_testimony2" placeholder="Title" required> 
                    </div>
                    <!-- End of Title-->

                    <!-- Feedback -->
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_testimony3" placeholder="Feedback" id="floatingTextarea3" style="height: 150px; resize:none;" required><?php echo $details_testimony3; ?></textarea>
                    </div>
                    <!-- End of Feedback-->

                    <!-- Customer Rating -->
                    <div class="form-group mt-2">
                                <label>Customer Rating:</label>
                                <select style="cursor:pointer"  name="customer rating" id="rating_id" class="form-control" required>
                                    <option value="">--- Select Customer Rating ---</option>
                                    <option value="1">⭐</option>
                                    <option value="2">⭐⭐</option>
                                    <option value="3">⭐⭐⭐</option>
                                    <option value="4">⭐⭐⭐⭐</option>
                                    <option value="5">⭐⭐⭐⭐⭐</option>
                                </select>
                            </div>
                    <!-- End of Customer Rating-->

    					<div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to Add this Data?')">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    					</div>
    				</div>
					</div>
    		</form>
    	</div>
    </div>
<!-- End of Company Form -->
<?php
    include("footer.php")
?>

</div>
