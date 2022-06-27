<?php
include('database_connection.php');

$active = "Measurement";
include('header.php');
include('sidebar.php');

?>
<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Unit of Measurement</strong></h5>
                    <ul class="nav ml-auto add_product">
						<li><a type="button" class="print_table btn btn-secondary p-2" data-toggle="tooltip" data-placement="bottom" title="Print Table"><i class="fa fa-print fa-lg"></i></a></li>
                        <li><div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="#measurementModal" class="btn btn-info mt-1 ml-4 mr-3 p-1"><i class="fa fa-plus-square"></i> Add New Measurement</button>   		
                        </div></li>
                    </ul>
                </ol>
            </nav>
			<span id="alert_action"></span>
			<div style="clear:both"></div>
                     <!--Datatable-->
                    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                            <div class="table-responsive ">
                                <table id="measurement_data" class="table table-bordered table-hover w-100 table-sm">
                                <thead>
								<tr>
									<th class="print_border text-center">Measurement</th>
									<th class="print_border text-center">Status</th>
									<th class="print_border text-center">Availability</th>
									<th class="print_border text-center">Action</th>
								</tr>
								</thead>

								<tfoot>
									<tr>
									<th class="print_none text-center">Measurement</th>
									<th class="print_none text-center">Status</th>
									<th class="print_none text-center">Availability</th>
									<th class="print_none text-center">Action</th>
									</tr>
								</tfoot>
								</table>
							</div>
            		<!--/Datatable-->
			</div>
	<div id="measurementModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="measurement_form">
    			<div class="modal-content">
    				<div class="modal-header">
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add measurement</h4>
    				</div>
    				<div class="modal-body">
    					<label>Enter Measurement Name</label>
						<input type="text" name="measurement_name" id="measurement_name" class="form-control" required />
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="measurement_id" id="measurement_id"/>
    					<input type="hidden" name="btn_action" id="btn_action"/>
    					<input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
	<!--End of Main Content-->
<?php
    include("footer.php")
?>
</div>


<script>
	// For Printing Table
	function printData()
        {
        var divToPrint=document.getElementById("measurement_data");
        newWin= window.open("");
        newWin.document.write('<style>.print_border{border: 1px black solid} .print_none{display:none} .table{border-collapse: collapse;} .table td {border: 1px black solid}</style>');
        newWin.document.write('<title>ILAW Lighting and Equipment Trading</title>');
        newWin.document.write('<center><h1>Unit of Measurement Printed Data<h1><center>');
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
		$('#measurement_form')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add measurement");
		$('#action').val('Add');
		$('#btn_action').val('Add');
	});

	$(document).on('submit','#measurement_form', function(event){
		event.preventDefault();
		$('#action').attr('disabled','disabled');
		var form_data = $(this).serialize();
		$.ajax({
			url:"measurement_action.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#measurement_form')[0].reset();
				$('#measurementModal').modal('hide');
				$('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
				$('#action').attr('disabled', false);
				measurementdataTable.ajax.reload();
			}
		})
	});

	$(document).on('click', '.update', function(){
		var measurement_id = $(this).attr("id");
		var btn_action = 'fetch_single';
		$.ajax({
			url:"measurement_action.php",
			method:"POST",
			data:{measurement_id:measurement_id, btn_action:btn_action},
			dataType:"json",
			success:function(data)
			{
				$('#measurementModal').modal('show');
				$('#measurement_name').val(data.measurement_name);
				$('.modal-title').html('<i class="fa fa-edit"></i> Edit Measurement');
				$('#measurement_id').val(measurement_id);
				$('#action').val('Edit');
				$('#btn_action').val("Edit");
			}
		})
	});

	var measurementdataTable = $('#measurement_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"measurement_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0,1,2],
				"orderable":false,
			},
		],
		"pageLength": 9999999
	});
	$(document).on('click', '.delete', function(){
		var measurement_id = $(this).attr('id');
		var status = $(this).data("status");
		var btn_action = 'delete';
		if(confirm("Are you sure you want to change availability of this?"))
		{
			$.ajax({
				url:"measurement_action.php",
				method:"POST",
				data:{measurement_id:measurement_id, status:status, btn_action:btn_action},
				success:function(data)
				{
					$('#alert_action').fadeIn().html('<div class="alert alert-Secondary">'+data+'</div>');
					measurementdataTable.ajax.reload();
				}
			})
		}
		else
		{
			return false;
		}
	});
});
</script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>


     


