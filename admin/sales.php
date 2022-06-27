<?php
$active = "Sales";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Sales</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a type="button" class="btn btn-secondary p-2" data-toggle="tooltip" data-placement="bottom" title="Print Table"><i class="fa fa-print fa-lg"></i></a></li>
                        <li><div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="" class="btn btn-info mt-1 ml-4 mr-3 p-1"><i class="fa fa-plus-square"></i> Add New Courier</button>   		
                        </div></li>
                    </ul>
                </ol>
            </nav>
<?php
    include("footer.php")
?>
</div>
