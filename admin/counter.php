<?php
include('database_connection.php');

$active = "Customers";
include('header.php');
include('sidebar.php');
include('../function.php');

if (isset($_GET['id'])) {
    $transaction = $_GET['id'];
    $conn =  mysqli_connect("localhost", "root", "", "database");
    $sql = "SELECT * FROM customer_order_product WHERE transaction_id = '$transaction' ";
    $result = $conn->query($sql);
} else  'connection failed'

?>
<!--Content right-->
<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <h5 class="pt-2"><strong>Counter <i class="fa fa-shopping-cart"></i></strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="#invoiceModal" class="btn btn-info p-1 m-1 mr-3"><i class="fa fa-print fa-lg" title="Print Invoice"></i> Print Invoice</button>   		
                        </div></li>
                        <li><a type="button" class="btn btn-info p-2 ml-1" data-toggle="tooltip" data-placement="bottom" title="Check Inventory" href="items.php"><i class="fa fa-archive fa-lg"></i></a></li>
                        <li><a type="button" class="btn btn-secondary p-2 ml-1" data-toggle="tooltip" data-placement="bottom" title="Back to Customer List" href="customers.php"><i class="fa fa-mail-reply fa-lg"></i></a></li>
                        
                    </ul>
                </ol>

                <ol class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item" aria-current="page"><a href="customers.php">Customers</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Counter</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a><?php echo $transaction; ?></a></li>
        </ol>
    <div id="invoiceModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="invoice_form">
            <div class="modal-content">
                        <!--Invoice-->
                        <div class="p-3 button-container bg-white border shadow-sm">
                        <ul class="pt-1 d-flex justify-content-between">
                            <li class="d-flex">
                            <h3 class="m-2 mr-auto">Invoice Receipt</h3>
                            </li>
                            <button type="button" class="btn btn-secondary p-2 ml-1" data-toggle="tooltip" data-placement="bottom" title="Back" data-dismiss="modal"><i class="text-white fa fa-mail-reply fa-lg"></i></button>
                            </ul>
                            <div class="dropdown-divider"></div>

                            <div class="row mt-3 mb-4">
                                <!--Address-->
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="invoice-from">
                                        <address>
                                            <p><small>Sent to</small></p>                                           <strong>Sleekadmin Enterprise</strong>
                                            <p class="mt-1 mb-0"> 455 Alen Ave, Apartment 4B</p>
                                            <p> Los Santos, CA 94107</p>
                                        </address>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="invoice-to text-right">
                                        <address>
                                            <p><small>Recieved from</small></p>
                                            <strong>ILAW</strong>
                                            <p class="mt-1 mb-0">Phase 11 Block 14 Lot 48 Carmona Estates Brgy Lantic 4116 Carmona, Philippines</p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <!--/Address-->

                            <!--Invoice Order-->

                            <div class="table-responsive mt-5">
                                <table class="table">
                                    <thead>
                                        <tr class="bg-secondary text-white">
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Unit cost</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>iPhone 5 32GB White & Silver (GSM) Unlocked</td>
                                            <td>1</td>
                                            <td>$742.00</td>
                                            <td>$742.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>iPad mini with Wi-Fi 32GB - White & Silver</td>
                                            <td>2</td>
                                            <td>$429.00</td>
                                            <td>$858.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Samsung Galaxy Grand</td>
                                            <td>1</td>
                                            <td>$300.00</td>
                                            <td>$300.00</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>4</td>
                                            <td>Nexus 5</td>
                                            <td>3</td>
                                            <td>$250.00</td>
                                            <td>$750.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-right mt-4 p-4">
                                    <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                    <p><strong>Shipping: $1000.00</strong></p>
                                    <p><span>vat(10%): $150.00</span></p>
                                    <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="form-group text-right p-3">
                                    <button type="button" class="btn btn-success"><i class="fa fa-send"></i> Send invoice</button>
                                    <button type="button" class="btn btn-theme ml-1"><i class="fa fa-print"></i> Print</button>
                                </div>

                            </div>

                            <!--/Invoice Order-->
                        </div>
                        <!--/Invoice-->
                </div>
    		</form>
    	</div>
    </div>
    <div id="proofModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="proof_form">
            <div class="modal-content">
                <div class="p-3 button-container bg-white border shadow-sm">
                <ul class="pt-1 d-flex justify-content-between">
                  <li class="d-flex">
                  <h3 class="m-2 mr-auto">Proof of Payment</h3>
                  </li>
                  <button type="button" class="btn btn-secondary p-2 ml-1" data-toggle="tooltip" data-placement="bottom" title="Back" data-dismiss="modal"><i class="text-white fa fa-mail-reply fa-lg"></i></button>
                </ul>
                <!-- Customer Proof of Payment -->
                    <div class="dropdown-divider mb-3"></div>
                        <div class="form-group p-2 border text-center" style="background: #f1f5f9;">
                        <img src="product_images/COG_Lingahan.png" height="auto" width="100%"/>
                        </div>
                    <div class="dropdown-divider"></div>
                    <div class="justify-content-around">
                        <div class="text-left text-center">
                            <button type="button" class="btn btn-success"><i class="fa fa-thumbs-up"></i> Validate</button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-thumbs-down"></i> Invalidate</button>
                        </div>
                        <div class="text-center">
                        <span class="badge badge-none text-dark ">Note: Check if the proof of payment is valid or not.</span>
                        <span class="badge badge-none text-dark ">Check your bank account if you received the payment.</span>
                        </div>
                    </div>

            </div>
    		</form>
    	</div>
    </div>
       
    </nav>
    <span id="alert_action"></span>
    <div style="clear:both"></div>
    <!-- Customer Details -->
    <div class="button-container">
        <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="mt-1 mb-1 p-3 bg-white border shadow-sm">
                <h5 class="mt-2 text-center"><strong>Customer Information</strong></h5>
                <hr>
                <div class="d-flex justify-content-center">
                    <img src="images/Profiles/Patrick.jpg" height="125px" width="125px"/>
                    <br>
                    <button type="button" class="btn btn-warning ml-3"  data-toggle="modal" data-target="#proofModal"><img src="images/Profiles/pop_icon.png" height="80px" width="80px"/><span class="badge badge-none text-dark ">Proof of Payment<br>(See Attachment)</span></button>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-3">
                <table class="mt-3">
                    <tr>
                        <td><span>Customer Name: </span><span class="text-theme">John Patrick M. Lingahan</span></td>
                    </tr>
                    <tr>
                        <td><span>Customer ID: </span><span class="text-theme">1801-00218</span></td>
                    </tr>
                    <tr>
                        <td><span>Contact #: </span><span class="text-theme">09567485622</span></td>
                    </tr>
                    <tr>
                        <td><span>Full Address: </span><span class="text-theme">159 General Malvar Street San Vicente Biñan City Laguna </span></td>
                    </tr>
                    <tr>
                        <td><span>Courier Preffered: </span><span class="text-theme">J&T Express</span></td>
                    </tr>
                    <tr>
                        <td><span>Mode of Payment: </span><span class="text-theme">Online Banking</span></td>
                    </tr>
                </table>
                </div>
            </div>
            <center><button type="button" id="show_alert_promise_one" class="btn btn-info p-1 m-2 mr-3 text-center"><i class="fa fa-cogs fa-lg"></i> Process Order</button>
            <button type="button" id="show_alert_promise_zero" class="btn btn-danger p-1 m-2 mr-3 text-center"><i class="fa fa-times-circle fa-lg"></i> Cancel Order</button>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="mt-1 mb-1 p-3 bg-white border shadow-sm">
                <h5 class="mt-2 text-center"><strong>Transaction Details</strong></h5>
            <hr>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Payment Status:
                    <span class="badge badge-warning badge-pill font-weight-bold">Pending</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Transaction ID:
                    <span class="font-weight-bold"><?php echo $transaction; ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Purchased Item(s):
                    <span class="font-weight-bold">5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Shipping Total:
                    <span class="font-weight-bold">₱570</span>
                </li>
                <h3><li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                    Total:
                    <span>₱1,270</span>
                </li></h3>
            </ul>
                </div>
        </div>
    
        </div>
    </div>
    <!--Datatable-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <div class="table-responsive">
        <h5 class="mt-2 text-center"><strong>Products Ordered</strong></h5><hr>
            <table id="order_data" class="table table-bordered table-hover w-100 table-sm">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th class="text-center">Transaction ID</th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price</th>
                        
                    </tr>
                </thead>
                <?php
                    while ($row = mysqli_fetch_array($result)) {

                        echo '  
                            <tr>  
                                    <td>' . $row["transaction_id"] . '</td>
                                    <td>' . $row["product_name"] . '</td>  
                                    <td>' . $row["unit"] . '</td> 
                                    <td>' . $row["quantity"] . '</td>
                                    <td>' . $row["price"] . '</td>
                                            
                            </tr> 
                               ';
                    }
                    ?>
                <tfoot>
                        <th class="text-center">Transaction ID</th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price</th>
                        
                </tfoot>
            </table>
        </div>
        <!--/Datatable-->
    </div>
    
    <!--End of Main Content-->
    <?php
    include("footer.php")
    ?>
    <script>
        $(document).ready(function() {
            $('#order_data').DataTable();
        });
    </script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
   