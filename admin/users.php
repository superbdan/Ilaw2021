<?php
$active = "Users";
include('header.php');
include('sidebar.php');
include('../function.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Users</strong></h5>
                    <ul class="nav ml-auto add_product">
						<li><a type="button" class="print_table btn btn-secondary p-2" data-toggle="tooltip" data-placement="bottom" title="Print Table"><i class="fa fa-print fa-lg"></i></a></li>
                        <li><div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="#roleModal" class="btn btn-primary mt-1 ml-4 mr-3 p-1"><i class="fa fa-info"></i> View Role Details</button>   		
                        </div></li>
                        <li><div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info mt-1 ml-4 mr-3 p-1"><i class="fa fa-plus-square"></i> Add New User</button>   		
                        </div></li>
                    </ul>
                </ol>
            </nav>
            <span id="alert_action"></span>
			<div style="clear:both"></div>
                     <!--Datatable-->
                    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                        <div class="table-responsive">
                            <table id="users_data" class="table table-bordered table-hover w-100 table-sm">
								<thead>
									<tr>
									<th class="print_border text-center">Username</th>
									<th class="print_border text-center">Email</th>
									<th class="print_border text-center">Contact</th>
									<th class="print_border text-center">Address</th>
									<th class="print_border text-center">Type</th>
									<th class="print_border text-center">Status</th>
									<th class="print_border text-center">Actions</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
									<th class="print_none text-center">Username</th>
									<th class="print_none text-center">Email</th>
									<th class="print_none text-center">Contact</th>
									<th class="print_none text-center">Address</th>
									<th class="print_none text-center">Type</th>
									<th class="print_none text-center">Status</th>
									<th class="print_none text-center">Actions</th>
									</tr>
								</tfoot>
                    		</table>
                    	</div>
					<!--/Datatable-->
            </div>
    <div id="userModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="user_form">
    			<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add User</h4>
						<a type="button" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true" class="h5 pt-3" style="cursor: pointer"><i class="fa fa-times fa-lg"></i></span></a>
    				</div>
    				<div class="modal-body">
					    <div class="form-group">
							<label>User Name</label>
							<input type="text" name="user_name" id="user_name" class="form-control" required />
						</div>
                        <div class="form-group">
							<label>Email</label>
							<input type="email" name="user_email" id="user_email" class="form-control" required />
						</div>
    					<div class="form-group">
							<label>Contact No</label>
							<input type="text" name="user_contact" id="user_contact" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="user_address" id="user_address" class="form-control" required />
						</div>
                        <div class="form-group">
							<label>Password</label>
							<input type="password" name="user_password" id="user_password" class="form-control" required />
						</div>
                        <div class="form-group">
							<label>Type</label>
							<select type="text" name="user_type" id="user_type" class="form-control" required >
                                <option>--- Select Type ---</option>
                                <option value="master">master</option>
                                <option value="staff">staff</option>
                                <option value="user">user</option>
                            </select>
						</div>
                        <div class="form-group">
							<label>Status</label>
							<select type="text" name="user_status" id="user_status" class="form-control" required >
                                <option>--- Select Status ---</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="supplier_id" id="supplier_id" />
    					<input type="hidden" name="btn_action" id="btn_action" />
    					<input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
    					<input type="reset" name="action" id="action" class="btn btn-danger" value="Clear" />
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
	<div id="roleModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="user_form">
    			<div class="modal-content">
					<div class="modal-header">
						<h5><i class="fa fa-info"></i> Role Details</h4>
    				</div>
    				<div class="modal-body">
					    <div class="form-group">
							<label style="font-weight: bold;">Administrator</label>
							<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;it refers to the owner of the ILAW company, you will notice the "master" label in the user type as it was indicated for the admin. The overall system can access by the admin as they can operate or manage interfaces from e-commerce to inventory system.</p>
						</div>
						<div class="form-group">
							<label style="font-weight: bold;">Staff</label>
							<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;it refers to the secondary manager of the inventory, you will notice the "staff" label in the user type as it was indicated for the staff users, they can receive valid customer orders, invoice receipt from stocks to check the physical stock room. The Admin only allows them to view the inventory status.</p>
						</div>
						<div class="form-group">
							<label style="font-weight: bold;">Customer</label>
							<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;it refers to the inquiring customer and buyers from the e-commerce, you will notice the "user" label in the user type as it was indicated for the customers. They can register their account on ILAW Website to acquire quick ordering process. </p>
						</div>
    					<div class="modal-footer">
    						<button type="button" class="btn btn-info" data-dismiss="modal">Got it!</button>
    					</div>
    				</div>
					</div>
    		</form>
    	</div>
    </div>
<!-- End of Main Content-->
<?php
    include("footer.php")
?>
<script>
// For Printing Table
function printData()
        {
        var divToPrint=document.getElementById("users_data");
        newWin= window.open("");
        newWin.document.write('<style>.print_border{border: 1px black solid} .print_none{display:none} .table{border-collapse: collapse;} .table td {border: 1px black solid}</style>');
        newWin.document.write('<title>ILAW Lighting and Equipment Trading</title>');
        newWin.document.write('<center><h1>Customers Printed Data<h1><center>');
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
        }

        $('.print_table').on('click',function(){
        printData();
        })
// End of Printing Table code

// Main Function
$(document).ready(function(){

	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add User");
		$('#action').val('Add');
		$('#btn_action').val('Add');
	});

	$(document).on('submit','#user_form', function(event){
		event.preventDefault();
		$('#action').attr('disabled','disabled');
		var form_data = $(this).serialize();
		$.ajax({
			url:"user_action.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#user_form')[0].reset();
				$('#userModal').modal('hide');
				$('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
				$('#action').attr('disabled', false);
				userdataTable.ajax.reload();
			}
		})
	});

	$(document).on('click', '.update', function(){
		var id = $(this).attr("id");
		var btn_action = 'fetch_single';
		$.ajax({
			url:"user_action.php",
			method:"POST",
			data:{id:id, btn_action:btn_action},
			dataType:"json",
			success:function(data)
			{
				
				$('#user_name').val(data.user_name);
				$('#user_email').val(data.user_email);
                $('#user_contact').val(data.user_contact);
                $('#user_address').val(data.user_address);
                $('#user_password').val(data.user_password);
                $('#user_type').val(data.user_type);
                $('#user_status').val(data.user_status);
				$('.modal-title').html("<i class='fa fa-pencil-square-o'></i> Edit User");
				$('#id').val(id);
				$('#action').val('Edit');
				$('#btn_action').val("Edit");
				$('#userModal').modal('show');
			}
		})
	});

	var userdataTable = $('#users_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"user_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0,1,2,3,4,5],
				"orderable":false,
			},
		],
		"pageLength": 9999999
	});
	$(document).on('click','.delete', function(){
		var id = $(this).attr("id");
		var status  = $(this).data('status');
		var btn_action = 'delete';
		if(confirm("Are you sure you want to delete this user?"))
		{
			$.ajax({
				url:"user_action.php",
				method:"POST",
				data:{id:id, status:status, btn_action:btn_action},
				success:function(data)
				{
					$('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
					userdataTable.ajax.reload();
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '.view_data', function(){  
           var id = $(this).attr("id");
		   var btn_action = 'fetch_single';  
           if(id != '')  
           {  
                $.ajax({  
                     url:"user_action.php",  
                     method:"POST",  
                     data:{id:id},  
                     success:function(data){  
                          $('#user_detail').html(data);
						  $('#user_table').html('show');  
                          $('#dataModal').modal('show');  
						  $('#btn_action').val("view_data");
						  $('#user_name').val(data.user_name);
				$('#user_email').val(data.user_email);
                $('#user_contact').val(data.user_contact);
                $('#user_address').val(data.user_address);
                $('#user_password').val(data.user_password);
                $('#user_type').val(data.user_type);
                $('#user_status').val(data.user_status);
				$('.modal-title').html("<i class='fa fa-pencil-square-o'></i> Edit User");
				$('#id').val(id);
                     }  
                });  
           }            
      });    
});
</script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

