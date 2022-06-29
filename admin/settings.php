<?php
$active = "Settings";
include('header.php');
include('sidebar.php');
?>

<!--Main Content-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h5 class="pt-2" ><strong>Settings</strong></h5>
                    <ul class="nav ml-auto add_product">
                        <li><a tabindex="0" class="btn btn-secondary pb-1" role="button" data-toggle="popover" data-trigger="focus" title="Content Guide" data-content="This section will help you to modify or change the entire data you have set on their respective sections."><i class="fa fa-info fa-lg"></i></a></li>
                    </ul>
                </ol>
            </nav>
<!--Button Modifier -->
    <button onclick="window.location='m_best sellers.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify Best Sellers Items</button>
    <button onclick="window.location='m_new arrival.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify New Arrival Items</button>
    <button onclick="window.location='m_testimonial.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify Testimonial Section</button>
    <!--<button onclick="window.location='m_customer supp.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify Customer Support</button> -->
    <button onclick="window.location='m_faqs.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify Frequently Asked Questions</button>
    <button onclick="window.location='m_company team.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify Company Team</button>
    <button onclick="window.location='m_about us.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify About Us</button>
    <button onclick="window.location='m_online banks.php';" class="btn btn-secondary btn-block"><i class="fa fa-pencil"></i> Modify Online Banks Displayed in Checkout Page</button>
<!--    
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_bestsellersModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Best Sellers Item</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_newarrivalModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify New Arrival Item</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_testimonialModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Testimonial Section</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_customersuppModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Customer Support</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_faqsModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Frequently Asked Questions</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_companyModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Company Team</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_aboutusModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify About Us</a>
<a type="button" id="modify_button" name="modify" data-toggle="modal" data-target="#m_onlinebanksModal"  class="btn btn-secondary btn-lg btn-block p-1 text-white"><i class="fa fa-pencil"></i> Modify Online Banks Displayed in Checkout Page</a> -->
<?php
    include("footer.php")
?>
</div>
