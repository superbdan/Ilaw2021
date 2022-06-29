<?php
$active = "Settings";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Frequently Asked Questions (FAQs)</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" id="add_button" name="modify" data-toggle="modal" data-target="#m_faqsModal"  class="btn btn-info ml-3 p-1"><i class="fa fa-pencil"></i> Modify FAQs</a></li>
                    </ul>
                </ol>
                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item" aria-current="page"><a href="settings.php">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Modify Frequently Asked Questions</a></li>
        </ol>
            </nav>
            <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                <!--Datatable-->
                            <div class="table-responsive ">
                                <table id="faqs_data" class="table table-bordered table-hover w-100 table-sm">
                                <thead>
								<tr>
									<th class="print_border text-center">Questions</th>
									<th class="print_border text-center">Answers</th>
									<th class="print_border text-center">Action</th>
								</tr>
								</thead>

								<tfoot>
									<tr>
									<th class="print_border text-center">Questions</th>
									<th class="print_border text-center">Answers</th>
									<th class="print_border text-center">Action</th>
									</tr>
								</tfoot>
								</table>
            		<!--/Datatable--> 
            </div>

    <!-- Online Banks Form -->
    <div id="m_faqsModal" class="modal fade">
    	<div class="modal-dialog modal-2x modal-dialog-scrollable">
            <form action="" method="post" enctype="multipart/form-data">
    			<div class="modal-content">
					<div class="modal-header">
						<h3>Add Question and Answer</h3>
    				</div>
    				<div class="modal-body">
                    <!-- Question -->
                     <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="floatingInput2" value="<?php echo $label_question; ?>" name="label_question" placeholder="Question" required> 
                    </div>
                    <!-- End of Question-->
                    <!-- Answer -->
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="details_ans" placeholder="Answer" id="floatingTextarea3" style="height: 150px; resize:none;" required><?php echo $details_ans; ?></textarea>
                    </div>
                    <!-- End of Answer-->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Are you sure you want to Add this Data?')">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    					</div>
    				</div>
					</div>
    		</form>
            </div>
        </div>
    </div>
<!-- End of Online Banks Form -->
<?php
    include("footer.php")
?>
</div>

