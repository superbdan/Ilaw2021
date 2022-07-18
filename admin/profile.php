<?php
$active = "Dashboard";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Profile</strong></h5>
                </ol>
            </nav>
            <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--User profile header-->
                        <div class="mt-1 mb-3 button-container bg-white border shadow-sm">
                            <div class="profile-bg p-5">
                                <img src="images/Profiles/Patrick.jpg" height="125px" width="125px" class="rounded-circle shadow profile-img" />
                            </div>
                            <div class="profile-bio-main container-fluid">
                                <div class="row">
                                    <div class="col-md-5 offset-md-3 col-sm-12 offset-sm-0 col-12 bio-header">
                                        <h3 class="mt-4">Mark Deofat B. Baluran</h3>
                                        <span class="text-muted mt-0 bio-request">Administrator</span>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-12 px-5 text-right pt-4 bio-comment">
                                        </button>
                                        <button type="button" name="edit" id="profile_button" data-toggle="modal" data-target="#profileModal" class="btn btn-info"><i class="fa fa-pencil"></i> Edit Profile</button>   		

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/User profile header-->

                    </div>
                </div>

    <div id="profileModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="measurement_form">
    			<div class="modal-content">
    				<div class="modal-header">
						<h4 class="modal-title"><i class="fa fa-pencil"></i> Edit Profile</h4>
                        <a type="button" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true" class="h5 pt-3" style="cursor: pointer"><i class="fa fa-times fa-lg"></i></span></a>
    				</div>
    				<div class="modal-body">
    					<label>First Name:</label>
						<input type="text" name="profile_name" id="profile_name" class="form-control" required /><br>
                        <label>Last Name:</label>
						<input type="text" name="profile_name" id="profile_name" class="form-control" required /><br>
                        <label>Email: </label>
						<input type="text" name="profile_name" id="profile_name" class="form-control" required /><br>
                        <label>Address:</label>
						<input type="text" name="profile_name" id="profile_name" class="form-control" required /><br>
                        <label>Position: </label>
						<input type="text" name="profile_name" id="profile_name" class="form-control" required /><br>
                        <label>Description: </label>
						<textarea class="form-control" style="resize: none;" name="" id="" rows="5" placeholder="Write a message" require></textarea>
                        
    				</div>
    				<div class="modal-footer">
    					<input type="submit" name="action" id="action" class="btn btn-info" value="Update" />
                        <input type="reset" name="action" id="action" class="btn btn-danger" value="Clear" />
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
                           
                            <div class="tab-pane p-4" id="custom-profile" role="tabpanel" aria-labelledby="nav-profile">
                                    <div class="table-responsive mb-4">
                                        <table class="table table-borderless table-striped m-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Full Name</th>
                                                    <td>Mario Mendez</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Gender</th>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Birth Date</th>
                                                    <td>October 25th, 1990</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Marital Status</th>
                                                    <td>Single</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>New York, USA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="dropdown-divider"></div>

                                    <div class="mt-4 mb-4">
                                        <h6 class="mb-2">Biography</h6>
                                        <p class="p-typo">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                                        </p>
                                        <p class="p-typo">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                        <p class="p-typo">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                                        </p>
                                    </div>

                                </div>
                                <!--/Personal info tab-->


<?php
    include("footer.php")
?>
</div>
