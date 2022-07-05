<?php
include('database_connection.php');

$active = "Customers";
include('header.php');
include('sidebar.php');
include('../function.php');
$connect = mysqli_connect("localhost", "root", "", "database");
$query = "SELECT * FROM customer_order WHERE status ='2'";
$result = mysqli_query($connect, $query);
?>

<!--Content right-->
<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Customers</strong></h5>
            <ul class="nav ml-auto add_product">
                <li><a type="button" class="print_table btn btn-secondary p-2" data-toggle="tooltip" data-placement="bottom" title="Print Table"><i class="fa fa-print fa-lg"></i></a></li>
            </ul>
        </ol>
    </nav>
    <span id="alert_action"></span>
    <div style="clear:both"></div>
    <div class="button-container custom-tabs">
    <nav>
    <div class="nav nav-tabs nav-fill" id="nav-custom-2" role="tablist">
        <a class="nav-item nav-link" id="nav-customers"  href="customers.php" role="tab" aria-controls="nav-customers-2" aria-selected="true"><strong>Customers</strong></a>

        <a class="nav-item nav-link" id="nav-ship" href="customer-to-ship.php" role="tab" aria-controls="nav-ship-2" aria-selected="false"><strong>To Ship</strong></a>

        <a class="nav-item nav-link active" id="nav-receive" href="customer-to-received.php" role="tab" aria-controls="nav-receive-2" aria-selected="false"><strong>To Receive</strong></a>

        <a class="nav-item nav-link" id="nav-complete" href="customer-completed.php" role="tab" aria-controls="nav-complete-2" aria-selected="false"><strong>Complete</strong></a>

        <a class="nav-item nav-link" id="nav-cancel" href="customer-cancelled.php" role="tab" aria-controls="nav-cancel-2" aria-selected="false"><strong>Cancelled</strong></a> 
    </div>
    </nav>
    <!--Datatable-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <div class="table-responsive">
            <table id="order_data" class="table table-bordered table-hover w-100 table-sm">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th class="print_border text-center">Transaction ID</th>
                        <th class="print_border text-center">Customer ID</th>
                        <th class="print_border text-center">Customer Name</th>
                        <th class="print_border text-center">Contact</th>
                        <th class="print_border text-center">Address</th>
                        <th class="print_border text-center">Status</th>
                    </tr>
                </thead>
                <?php

                while ($row = mysqli_fetch_array($result)) {
                    switch ($row['status']) {
                        case '0':
                            $out = "<span class='badge badge-pill badge-warning'>Pending</span>";
                            break;
                        case '1':
                            $out = "<span class='badge badge-pill badge-info'>To Ship</span>";
                            break;
                        case '2':
                            $out = "<span class='badge badge-pill badge-primary'>To Recieved</span>";
                            break;
                        case '3':
                            $out = "<span class='badge badge-pill badge-success'>Completed</span>";
                            break;
                        case '4':
                            $out = "<span class='badge badge-pill badge-danger'>Cancelled</span>";
                            break;
                    }
                    echo '  
                               <tr>  
                                    <td>' . $row["transaction_id"] . '</td>
                                    <td>' . $row["customer_id"] . '</td> 
                                    <td>' . $row["customer_name"] . '</td>      
                                    <td>' . $row["customer_no"] . '</td>  
                                    <td>' . $row["address"] . '</td>
                                    <td class="text-center pt-2">' . $out . '</td>  
                               </tr>  
                               ';
                }
                ?>
                <tfoot>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th class="print_none text-center">Transaction ID</th>
                        <th class="print_none text-center">Customer ID</th>
                        <th class="print_none text-center">Customer Name</th>
                        <th class="print_none text-center">Contact</th>
                        <th class="print_none text-center">Address</th>
                        <th class="print_none text-center">Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>
    <!--End of Main Content-->
    <?php
    include("footer.php")
    ?>
    <script>
    // For Printing Table
        function printData()
        {
        var divToPrint=document.getElementById("order_data");
        newWin= window.open("");
        newWin.document.write('<style>.print_border{border: 1px black solid} .print_none{display:none} .table{border-collapse: collapse;} .table td {border: 1px black solid}</style>');
        newWin.document.write('<title>ILAW Lighting and Equipment Trading</title>');
        newWin.document.write('<center><h1>Customers Printed Data(To Received)<h1><center>');
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        }

        $('.print_table').on('click',function(){
        printData();
        })
    // End of Printing Table code

    // Main Function
        $(document).ready(function() {
            $('#order_data').DataTable();
        });
    </script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>