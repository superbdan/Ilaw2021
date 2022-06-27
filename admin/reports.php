<?php
include('database_connection.php');

$active = "Reports";
include('header.php');
include('sidebar.php');
error_reporting(0);

?>
<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Reports</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" class="btn btn-secondary p-2" data-toggle="tooltip" data-placement="bottom" title="Print Table"><i class="fa fa-print fa-lg"></i></a></li>
                        <li><div class="row" align="left">
                                <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle mt-1 ml-4 mr-3 p-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-placement="top">
                                &nbsp;&nbsp;&nbsp;&nbsp;Filter Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Order Report</a>
                                    <a class="dropdown-item" href="#">Transaction Logs Report</a>
                                    <a class="dropdown-item" href="#">Sales Report</a>
                                    <a class="dropdown-item" href="#">Inventory Report</a>
                                    <a class="dropdown-item" href="#">Product and Location Report</a>
                                    <a class="dropdown-item" href="#">Audit Trail Report</a>
                                </div>
                            </div>   		
                        </div></li>
                    </ul>
                </ol>
            </nav>
            <center>
            <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
				  
				  <figure class="highcharts-figure">
					<div id="container-1"></div>
				
				</figure>

                </div>
              </div>
            </div>
         </div> </center>
         <br>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="mt-2">Order Report Data </h4>
                  </div>
                  <div class="card-body">
				  
				     <div class="table-responsive">
                      <table class="table table-striped table-bordered w-100 table-sm" id="table_id">
                        <thead>
                          <tr>
                            <th class="text-center"> Transaction ID </th>
                            <th class="text-center"> Customer Detail</th>
                            <th class="text-center"> Orders </th>
                            <th class="text-center"> Total Expenses </th>
                            <th class="text-center"> Status</th>
                            <th class="text-center"> Date & Time</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th class="text-center"> Transaction ID </th>
                            <th class="text-center"> Customer Detail</th>
                            <th class="text-center"> Orders </th>
                            <th class="text-center"> Total Expenses </th>
                            <th class="text-center"> Status</th>
                            <th class="text-center"> Date & Time</th>
                          </tr>
                        </tfoot>
						<tbody>
                        <tr>
                <td>#6473593303</td>
                <td>Tiger Nixon</td>
                <td>Edinburgh</td>
                <td>$320,800</td>
                <td>Pending</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>#3203233105</td>
                <td>Garrett Winters</td>
                <td>Tokyo</td>
                <td>$170,750</td>
                <td>Pending</td>
                <td>2011/07/25</td>
            </tr>
						</tbody>
                      </table>
                    </div>
                  </div>
                </div>
<?php
    include("footer.php")
?>
</div>

<!-- HighCharts -->
    <script src="assets/js/highcharts/highcharts.js"></script>
    <script src="assets/js/highcharts/series-label.js"></script>
    <script src="assets/js/highcharts/exporting.js"></script>
    <script src="assets/js/highcharts/export-data.js"></script>
    <script src="assets/js/highcharts/accessibility.js"></script>
<!-- Order Report -->
<script>
Highcharts.chart('container-1', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'ORDER REPORTS ' + <?php echo date('Y');?>
    },
    subtitle: {
        text: 'Source: Ilaw Database'
    },
    xAxis: {
        categories: <?php echo json_encode($month1);?>
    },
    yAxis: {
        title: {
            text: 'Order Transactions'
        },
        labels: {
            formatter: function () {
				return Highcharts.numberFormat(this.value,0);
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
   
    series: [{
        name: 'Order Reports',
		color: '#0066FF',
        data: <?php echo json_encode($value1,JSON_NUMERIC_CHECK);?>

    }]
});
</script>

