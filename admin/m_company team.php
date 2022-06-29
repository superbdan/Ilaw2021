<?php
$active = "Settings";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Company Team</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" id="add_button" name="modify" data-toggle="modal" data-target="#m_companyModal"  class="btn btn-info ml-3 p-1"><i class="fa fa-pencil"></i> Modify Company Team</a></li>
                    </ul>
                </ol>
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item" aria-current="page"><a href="settings.php">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Modify Company Team</a></li>
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
									<th class="print_border text-center">Bank Position</th>
                                    <th class="print_border text-center">Description</th>
									<th class="print_border text-center">Action</th>
								</tr>
								</thead>
                                <tbody>
                                    <td class="text-center"><img src="images/Profiles/Patrick.jpg" alt="Admin_Profile" width="50px" class="rounded-circle" /></td>
                                    <td class="text-center">Patrick Lingahan</td>
                                    <td class="text-center">Front-End Developer</td>
                                    <td class="text-center">He is the leader of the team assembling and managing all the files into one.</td>
                                    <td class="text-center">sample</td>
                                </tbody>
								<tfoot>
									<tr>
                                    <th class="print_border text-center">Image</th>
									<th class="print_none text-center">Full Name</th>
									<th class="print_none text-center">Position</th>
                                    <th class="print_border text-center">Description</th>
									<th class="print_none text-center">Action</th>
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
                            <input type="text" class="form-control" id="floatingInput1" value="<?php echo $label_team; ?>" name="label_team" placeholder="Full Name" required> 
                    </div>
                    <!-- End of Full Name -->

                    <!-- Position -->
                    <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput2" value="<?php echo $label_position; ?>" name="label_position" placeholder="Position" required> 
                    </div>
                    <!-- End of Position-->

                    <!-- Description -->
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_desc" placeholder="Description" id="floatingTextarea3" style="height: 150px; resize:none;" required><?php echo $details_desc; ?></textarea>
                    </div>
                    <!-- End of Description-->

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
