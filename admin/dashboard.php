<?php
$active = "Dashboard";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Dashboard</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a tabindex="0" class="btn btn-theme pb-1" role="button" data-toggle="popover" data-trigger="focus" title="Content Guide" data-content="The Dashboard serve as the summary review of the overall output of the table for easy monitoring."><i class="fa fa-info fa-lg"></i></a></li>
                    </ul>
                </ol>
            </nav>
            <!--Dashboard widget-->
            <div class="mt-1 mb-3 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2">
                                    <ul class="income_sales">
                                    <li><h7 class="mt-2 text-theme"><small><strong>Sales This Year</strong></small><h7></li>
                                    <li class=" text-theme income_date"><h7><small><strong>2021</strong></small></h7></li>
                                    </ul>
                                    <h5 class="mt-4 text-center">₱226,085.00</h5>
                                    
                                    <center><label>Total Income</label></center>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2">
                                    <ul class="income_sales">
                                    <li><h7 class="mt-2 text-theme"><small><strong>Sales This Month</strong></small><h7></li>
                                    <li class=" text-theme income_date"><h7><small><strong>Nov</strong></small><h7></li>
                                    </ul>
                                    <h5 class="mt-4 text-center">₱226,085.00</h5>
                                    
                                    <center><label>Total Income</label></center>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2">
                                    <ul class="income_sales">
                                    <li><h7 class="mt-2 text-theme"><small><strong>Sales This Week</strong></small><h7></li>
                                    <li class=" text-theme income_date"><h7><small><strong>W-07</strong></small><h7></li>
                                    </ul>
                                    <h5 class="mt-4 text-center">₱226,085.00</h5>
                                    
                                    <center><label>Total Income</label></center>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2">
                                    <ul class="income_sales">
                                    <li><h7 class="mt-2 text-theme"><small><strong>Sales This Day</strong></small><h7></li>
                                    <li class=" text-theme income_date"><h7><small><strong> 25, Fri</strong></small><h7></li>
                                    </ul>
                                    <h5 class="mt-4 text-center">₱226,085.00</h5>
                                    
                                    <center><label>Total Income</label></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->
                 <!--Dashboard widget 2-->
                 <div class="mt-1 mb-3 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-dark-blue">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>5,198</strong></h3>
                                        <p><small class="text-muted bc-description">Customers</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-dark-blue">
                                        <i class="fa fa-bar-chart"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0"><strong>₱300k</strong></h3>
                                        <p><small class="text-muted bc-description">Total Revenue</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-dark-blue border shadow">
                                <div class="media p-4">
                                    <div class="align-self-center mr-3 rounded-circle notify-icon bg-white">
                                        <i class="fa fa-suitcase text-theme"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="mt-0 mb-0 text-white"><strong>1022</strong></h3>
                                        <p><small class="bc-description text-white">Total Products</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget 2-->
                
                <div class="mt-1 mb-3 button-container">
                <div class="row pl-0">
                    <!--Sales Presenatation-->
                <div class="col-md-8">
                    <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Sales Presentation</h6><hr>
                            <canvas id="orderRevenue" class="orderRevenue" height="120px"></canvas>
                    </div>
                </div>
                <!--/Sales Presentation-->
                <div class="col-md-4">
                <!--Stock Status-->
                    <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                        <h6 class="mb-3">Stock Status</h6><hr>

                        <center><div id="donutChartEcharts" style="height: 300px; margin: 20px 0px -15px 0px"></div></center>
                        </div>
                </div>
                </div>
                </div>
                <div class="mt-1 mb-3 button-container">
                            <div class="row pl-0">
                                <!--Dashboard widget sales analytics-->
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-3">
                                    <div class=" bg-white shadow-sm border border shadow p-3">
                                        <div id="main" style="height: 300px; width:100%;"></div>
                                    </div>
                                </div>
                                <!--/Dashboard widget sales analytics-->

                                <!--Dashboard widget guage-->
                                <div class="col-lg-4 col-md-8 col-sm-12 col-12 mb-3">
                                    <div class="border shadow p-3">
                                        <div id="main2" style="height: 300px; width:100%;"></div>
                                    </div>
                                </div>
                                <!--/Dashboard widget guage-->
                            </div>
                        </div>
<?php
    include("footer.php")
?>
</div>
    
<!-- Page JavaScript Files-->
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <script src="assets/js/sweetalert.js"></script>
    <!--Progressbar JS-->
    <script src="assets/js/progressbar.min.js"></script>
    <!--Flot.JS-->
    <script src="assets/js/charts/jquery.flot.min.js"></script>
    <script src="assets/js/charts/jquery.flot.pie.min.js"></script>
    <script src="assets/js/charts/jquery.flot.categories.min.js"></script>
    <script src="assets/js/charts/jquery.flot.stack.min.js"></script>
    <!--Sparkline-->
    <script src="assets/js/charts/sparkline.min.js"></script>
    <!--Morris.JS-->
    <script src="assets/js/charts/raphael.min.js"></script>
    <script src="assets/js/charts/morris.js"></script>
    <!--Chart JS-->
    <script src="assets/js/charts/chart.min.js"></script>
    <!--Echarts-->
    <script src="assets/js/charts/echarts.min.js"></script>
    <script src="assets/js/charts/echarts-data.js"></script>
    <!--Chartist JS-->
    <script src="assets/js/charts/chartist.min.js"></script>
    <script src="assets/js/charts/chartist-data.js"></script>
    <script src="assets/js/charts/demo.js"></script>
    <script src="assets/js/maps/jvector-maps.js"></script>
    <!--Bootstrap Calendar JS-->
    <script src="assets/js/calendar/bootstrap_calendar.js"></script>
    <script src="assets/js/calendar/demo.js"></script>
