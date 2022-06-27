<?php
include('../database_connection.php');

$active = "Logs";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Logs</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" class="print _table btn btn-secondary p-2" data-toggle="tooltip" data-placement="bottom" title="Print Table"><i class="fa fa-print fa-lg"></i></a></li>
                        <li><div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="" class="btn btn-info mt-1 ml-4 mr-3 p-1"><i class="fa fa-plus-square"></i> Filter Table</button>   		
                        </div></li>
                    </ul>
                </ol>
            </nav>
            <span id="alert_action"></span>
			<div style="clear:both"></div>
                     <!--Datatable-->
                    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                        <div class="table-responsive ">
                            <table id="logs_data" class="table table-bordered table-hover w-100 table-sm">
								<thead>
									<tr>
									<th class="print_border text-center">Incharge</th>
									<th class="print_border text-center">Action</th>
									<th class="print_border text-center">Date and Time</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
									<th class="print_none text-center">Incharge</th>
									<th class="print_none text-center">Action</th>
									<th class="print_none text-center">Date and Time</th>
									</tr>
								</tfoot>
                    		</table>
                    	</div>
					<!--/Datatable-->
            </div>
<?php
    include("../footer.php")
?>
<script>
	// For Printing Table
	function printData()
        {
        var divToPrint=document.getElementById("logs_data");
        newWin= window.open("");
        newWin.document.write('<style>.print_border{border: 1px black solid} .print_none{display:none} .table{border-collapse: collapse;} .table td {border: 1px black solid}</style>');
        newWin.document.write('<title>ILAW Lighting and Equipment Trading</title>');
        newWin.document.write('<center><h1>Logs Printed Data<h1><center>');
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
        }

        $('.print_table').on('click',function(){
        printData();
        })
// End of Printing Table code
$(document).ready(function(){

	var categorydataTable = $('#logs_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"../logs_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0],
				"orderable":false,
			},
		],
		"pageLength": 9999999
	});
	
});
</script>

