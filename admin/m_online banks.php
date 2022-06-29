<?php
$active = "Settings";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Online Banks</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" id="add_button" name="modify" data-toggle="modal" data-target="#m_onlinebanksModal"  class="btn btn-info ml-3 p-1"><i class="fa fa-pencil"></i> Modify Online Banks</a></li>
                    </ul>
                </ol>
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item" aria-current="page"><a href="settings.php">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Modify Online Banks</a></li>
        </ol>
            </nav>
            <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                <!--Datatable-->
                            <div class="table-responsive ">
                                <table id="onlinebank_data" class="table table-bordered table-hover w-100 table-sm">
                                <thead>
								<tr>
									<th class="print_border text-center">Online Banks</th>
									<th class="print_border text-center">Bank Details</th>
									<th class="print_border text-center">Action</th>
								</tr>
								</thead>

								<tfoot>
									<tr>
									<th class="print_none text-center">Online Banks</th>
									<th class="print_none text-center">Bank Details</th>
									<th class="print_none text-center">Action</th>
									</tr>
								</tfoot>
								</table>
            		<!--/Datatable--> 
            </div>

    <!-- Online Banks Form -->
    <div id="m_onlinebanksModal" class="modal fade">
    	<div class="modal-dialog modal-2x modal-dialog-scrollable">
            <form action="" method="post" enctype="multipart/form-data">
    			<div class="modal-content">
					<div class="modal-header">
						<h3>Add Online Bank</h3>
    				</div>
    				<div class="modal-body">
                    <!-- Online Bank Logo -->
                   
                    <label for="floatingSelect1 mt-2">Insert Online Bank Logo:</label>
                    <div class="form-floating mb-2">
                        <input type="file" class="form-control" id="file" name="img" accept= "*/image">
                    </div>
                    <label for="floatingSelect1 mt-2">Insert Bank Account Number:</label>
                    <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput5" value="<?php echo $label_onlinebank; ?>" name="label_onlinebank" placeholder="Bank Details" required> 
                    </div>
                    </div>
                    <!-- End of Online Bank Logo -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to Add this Data?')">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
