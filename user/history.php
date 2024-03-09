
<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"  >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="4xGEggWXMKvdbIBnzIPmpw7cEcSAgae0xwpUgy8j">
    <meta name="description" content="CoraWealth, A Modern CoraWealth Real State Investment Platform">
<meta name="keywords" content="Real state investment,  CoraWealth, , CoraWealth website, invest, Investment Management system, investment script, Bug Finder, bug-finder, bugfinder.net, bugfinder">
<link rel="shortcut icon" href="https://corawealth.com/assets/uploads/logo/favicon.png" type="image/x-icon">

<link rel="apple-touch-icon" href="https://corawealth.com/assets/uploads/logo/logo.png">
<title>CoraWealth | Investment History</title>
<link rel="icon" type="image/png" sizes="16x16" href="https://corawealth.com/assets/uploads/logo/favicon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="CoraWealth | Investment History">

<meta itemprop="name" content="CoraWealth | Investment History">
<meta itemprop="description" content="CoraWealth, A Modern CoraWealth Real State Investment Platform">
<meta itemprop="image" content="https://corawealth.com/assets/uploads/logo/meta.png600x315">

<meta property="og:type" content="website">
<meta property="og:title" content="CoraWealth,  A CoraWealth Real Estate Investment Platform">
<meta property="og:description" content="CoraWealth,  A CoraWealth Real Estate Investment Platform">
<meta property="og:image" content="https://corawealth.com/assets/uploads/logo/meta.png"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:url" content="https://corawealth.com/user/invest-history">

<meta name="twitter:card" content="summary_large_image">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link href="css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/range-slider.css">
    <link rel="stylesheet" type="text/css" href="css/fancybox.css">

    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/fontawesomepro.js"></script>
    <script src="js/modernizr.custom.js"></script>


            <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body >

<!------- Nav + Content ---------->
<div class="bottom-nav fixed-bottom d-lg-none">
    <div class="link-item ">
        <a href="https://corawealth.com/user/property-market/investment-properties">
            <i class="fal fa-project-diagram" aria-hidden="true"></i>
            <span>Invest</span>
        </a>
    </div>

    <div class="link-item ">
        <a href="https://corawealth.com/user/add-fund">
            <i class="fal fa-funnel-dollar" aria-hidden="true"></i>
            <span>Deposit</span>
        </a>
    </div>

    <div class="link-item ">
        <a href="https://corawealth.com/user/dashboard">
            <i class="fal fa-home-lg-alt"></i>
            <span>Home</span>
        </a>
    </div>

    <div class="link-item ">
        <a href="https://corawealth.com/user/payout">
            <i class="fal fa-hand-holding-usd" aria-hidden="true"></i>
            <span>Withdraw</span>
        </a>
    </div>
    <div class="link-item ">
        <button onclick="toggleSideMenu()">
            <i class="fal fa-ellipsis-v-alt"></i>
            <span>Menu</span>
        </button>
    </div>
</div>

<div class="wrapper">
    <!------ sidebar ------->
    <!-- sidebar -->
<?php
include "sidebar.php";
?>

    <!-- content -->
    <div id="content">
        <div class="overlay">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand d-lg-none" href="https://corawealth.com">
                        <img src="https://corawealth.com/assets/uploads/logo/logo.png"
                             alt="CoraWealth">
                    </a>
                    <button class="sidebar-toggler d-none d-lg-block" onclick="toggleSideMenu()">
                        <i class="far fa-bars"></i>
                    </button>
                    <!-- navbar text -->
                    <span class="navbar-text" id="pushNotificationArea">
                            <!-- notification panel -->
                                                        <div class="notification-panel">
    <button class="dropdown-toggle">
        <i class="fal fa-bell"></i>
        <span class="count" v-cloak>{{items.length}}</span>
    </button>
    <ul class="notification-dropdown">
        <div class="dropdown-box">
            <li v-for="(item, index) in items" @click.prevent="readAt(item.id, item.description.link)">
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fal fa-bell"></i>
                    <div class="text">
                        <p v-cloak v-html="item.description.text"></p>
                        <span class="time" v-cloak>{{ item.formatted_date }}</span>
                    </div>
                </a>
            </li>
        </div>

        <div class="clear-all fixed-bottom">
            <a href="javascript:void(0)" v-if="items.length == 0" class="golden-text">You have no notifications</a>
            <a href="javascript:void(0)" role="button" type="button" v-if="items.length > 0" @click.prevent="readAll" class="btn-clear golden-text">Clear All</a>
        </div>
    </ul>
</div>


                                                <!-- User panel -->
                        <div class="user-panel d-none d-lg-inline-block">
       <span class="profile">
          <img src="https://corawealth.com/assets/admin/images/default.png"
               class="img-fluid"
               alt="user img" />
       </span>
        <ul class="user-dropdown">
            <li>
                <a href="https://corawealth.com/user/dashboard">
                    <i class="fal fa-border-all"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="https://corawealth.com/user/profile">
                    <i class="fal fa-user"></i> My Profile                </a>
            </li>

            <li>
                <a href="https://corawealth.com/user/twostep-security">
                    <i class="fal fa-lock"></i> 2FA Security                </a>
            </li>

            <li>
                <a href="https://corawealth.com/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fal fa-sign-out-alt"></i> Logout                </a>
                <form id="logout-form" action="https://corawealth.com/logout" method="POST" class="d-none">
                    <input type="hidden" name="_token" value="4xGEggWXMKvdbIBnzIPmpw7cEcSAgae0xwpUgy8j">                </form>
            </li>
        </ul>
</div>
                        </span>
                </div>
            </nav>
                    <!-- Invest history -->
    <section class="transaction-history">
        <div class="container-fluid">
            <div class="row mt-4 mb-2">
                <div class="col ms-2">
                    <div class="header-text-full">
                        <h3 class="dashboard_breadcurmb_heading mb-1">Investment History</h3>
                        <nav aria-label="breadcrumb" class="ms-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://corawealth.com/user/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Invest History</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- search area -->
            <div class="search-bar mt-3 me-2 ms-2 p-0">
                <form action="" method="get" enctype="multipart/form-data">
                    <div class="row g-3 align-items-end">
                        <div class="input-box col-lg-2">
                            <label for="">Property</label>
                            <input
                                type="text"
                                name="property"
                                value="Name"
                                class="form-control"
                                placeholder="Search property"
                            />
                        </div>

                        <div class="input-box col-lg-2">
                            <label for="">Invest Status</label>
                            <select class="form-select" name="invest_status" aria-label="Default select example">
                                <option value="">All Invest</option>
                                <option value="1"  selected >Complete</option>
                                <option value="0" >Due</option>
                            </select>
                        </div>

                        <div class="input-box col-lg-2">
                            <label for="">Return Status</label>
                            <select class="form-select" name="return_status" aria-label="Default select example">
                                <option value="">All</option>
                                <option value="0"  selected >Running</option>
                                <option value="1" >Completed</option>
                            </select>
                        </div>

                        <div class="input-box col-lg-2">
                            <label for="from_date">From Date</label>
                            <input
                                type="text" class="form-control datepicker from_date" name="from_date" value="03/20/2024" placeholder="From date" autocomplete="off" readonly/>
                        </div>
                        <div class="input-box col-lg-2">
                            <label for="to_date">To Date</label>
                            <input
                                type="text" class="form-control datepicker to_date" name="to_date" value="03/27/2024" placeholder="To date" autocomplete="off" readonly disabled="true"/>
                        </div>
                        <div class="input-box col-lg-2">
                            <button class="btn-custom w-100" type="submit"><i class="fal fa-search"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-parent table-responsive me-2 ms-2 mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Property</th>
                            <th scope="col">Investment Amount</th>
                            <th scope="col">Profit</th>
                            <th scope="col">Upcoming Payment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                                                    <tr class="text-center">
                                <td colspan="100%" class="text-danger text-center">No Data Found!</td>
                            </tr>
                                            </tbody>
                </table>
            </div>
        </div>
    </section>

            </div>
    </div>
</div>

        <!-- Modal -->
        
        <div class="modal fade" id="duePaymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <form action="" method="post" id="invest-form" class="login-form due_payment_modal">
                    <input type="hidden" name="_token" value="4xGEggWXMKvdbIBnzIPmpw7cEcSAgae0xwpUgy8j">                    <input type="hidden" name="_method" value="put">                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Due Make Payment</h5>
                            <button type="button" class="close-btn close_invest_modal" data-bs-dismiss="modal"
                                    aria-label="Close">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="card">
                                <div class="m-3 mb-0 payment-method-details property-title font-weight-bold">
                                </div>

                                <div class="card-body">
                                    <div class="estimation-box">
                                        <div class="details_list">
                                            <ul>
                                                <li class="d-flex justify-content-between"><span>Fixed Invest</span>
                                                    <span class="fixed_invest"></span></li>
                                                <li class="d-flex justify-content-between totalInstallment">
                                                    <span>Total Installment</span><span
                                                        class="total_installments"></span></li>

                                                <li class="d-flex justify-content-between dueInstallment">
                                                    <span>Due Installment</span><span
                                                        class="due_installments"></span></li>

                                                <li class="d-flex justify-content-between dueInstallment">
                                                    <span>Installment Amount</span><span
                                                        class="installment_amount"></span></li>

                                                <li class="d-flex justify-content-between installmentDuration">
                                                    <span>Installment Duration</span> <span
                                                        class="installment_duration"></span></li>

                                                <li class="d-flex justify-content-between installmentLastDate">
                                                    <span>Installment Last Date</span> <span
                                                        class="installment_last_date"></span></li>

                                                <li class="d-flex justify-content-between installmentLateFee">
                                                    <span>Installment Late Fee</span> <span
                                                        class="installment_late_fee"></span></li>

                                                <li class="d-flex justify-content-between previousTotalPay">
                                                    <span>Previous Total Pay</span> <span
                                                        class="previous_total_pay"></span></li>

                                                <li class="d-flex justify-content-between previousTotalPay">
                                                    <span>Due Amount</span> <span
                                                        class="total_due_amount"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row g-3 investModalPaymentForm">
                                        <div class="input-box col-12">
                                            <label for="">Select Wallet</label>
                                            <select class="form-control form-select" id="exampleFormControlSelect1"
                                                    name="balance_type">
                                                                                                    <option
                                                        value="balance">Deposit Balance - $100</option>
                                                    <option
                                                        value="interest_balance">Interest Balance -$0</option>
                                                                                            </select>
                                        </div>

                                        <div class="input-box col-12 payInstallment d-none">
                                            <div class="form-check">
                                                <input type="hidden" value="" class="set_installment_amount">
                                                <input type="hidden" value="" class="set_totalDue_amount">
                                                <input type="hidden" value="" class="set_get_installment_date">
                                                <input type="hidden" value="" class="set_total_due_amount">
                                                <input type="hidden" value="" class="set_installment_late_fee">
                                                <input class="form-check-input" type="checkbox" value="0"
                                                       name="pay_installment" id="pay_installment"/>
                                                <label class="form-check-label"
                                                       for="pay_installment">Pay Installment</label>
                                            </div>
                                        </div>

                                        <div class="input-box col-12">
                                            <label for="">Amount</label>
                                            <div class="input-group">
                                                <input
                                                    type="text" class="invest-amount form-control" name="amount" id="amount"
                                                    value=""
                                                    onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                                    autocomplete="off"
                                                    placeholder="Enter amount" required>
                                                <button class="show-currency"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn-custom btn2 btn-secondary close_invest_modal close__btn"
                                    data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn-custom investModalSubmitBtn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="modal fade" id="sendOfferModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <form action="" method="post" id="invest-form" class="login-form send_offer_modal">
                    <input type="hidden" name="_token" value="4xGEggWXMKvdbIBnzIPmpw7cEcSAgae0xwpUgy8j">                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Set Share Amount</h5>
                            <button type="button" class="close-btn close_invest_modal" data-bs-dismiss="modal"
                                    aria-label="Close">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="card">
                                <div class="m-3 mb-0 payment-method-details property-title font-weight-bold">
                                </div>

                                <div class="card-body">
                                    <div class="row g-3 investModalPaymentForm">
                                        <div class="input-box col-12">
                                            <label for="">Share Amount</label>
                                            <div class="input-group">
                                                <input
                                                    type="text" class="invest-amount form-control " name="amount" id="amount"
                                                    value=""
                                                    onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                                    autocomplete="off"
                                                    placeholder="Enter amount" required>
                                                <button class="show-currency" type="button"></button>
                                            </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn-custom btn2 btn-secondary close_invest_modal close__btn"
                                    data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn-custom investModalSubmitBtn">Share</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="modal fade" id="updateOfferModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <form action="" method="post" id="invest-form" class="login-form update_offer_modal">
                    <input type="hidden" name="_token" value="4xGEggWXMKvdbIBnzIPmpw7cEcSAgae0xwpUgy8j">                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Share Amount</h5>
                            <button type="button" class="close-btn close_invest_modal" data-bs-dismiss="modal"
                                    aria-label="Close">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="card">
                                <div class="card-header payment-method-details property-title primary_color">
                                </div>

                                <div class="card-body">
                                    <div class="row g-3 investModalPaymentForm">
                                        <div class="input-box col-12">
                                            <label for="">Share Amount</label>
                                            <div class="input-group">
                                                <input
                                                    type="text" class="invest-amount form-control amount " name="amount" id="amount"
                                                    value=""
                                                    onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                                    autocomplete="off"
                                                    placeholder="Enter amount" required>
                                                <button class="show-currency" type="button"></button>
                                            </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn-custom btn2 btn-secondary close_invest_modal close__btn"
                                    data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn-custom investModalSubmitBtn">Share</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<?php include "js.php";
?>

    <script src="https://corawealth.com/assets/global/js/bootstrap-datepicker.js"></script>
    <script>
        'use strict'
        $(document).ready(function (){
            $( ".datepicker" ).datepicker({
                autoclose: true,
                clearBtn: true
            });

            $('.from_date').on('change', function (){
                $('.to_date').removeAttr('disabled');
            });

            $(document).on('click', '.duePayment', function () {
                var propertyInvestModal = new bootstrap.Modal(document.getElementById('duePaymentModal'))
                propertyInvestModal.show();

                let symbol = "$";
                let dataRoute = $(this).data('route');
                let dataProperty = $(this).data('property');
                let dataFixedAmount = $(this).data('fixedamount');
                let dataPreviousPay = $(this).data('previouspay');
                let isInstallment = $(this).data('isinstallment');
                let totalInstallments = $(this).data('totalinstallments');
                let totalDueInstallments = $(this).data('dueinstallments');
                let installmentAmount = $(this).data('installmentamount');
                let installmentDuration = $(this).data('installmentduration') + ' ' + $(this).data('installmentdurationtype');
                let installmentLastDate = $(this).data('installmentlastdate');
                let getInstallmentDate = $(this).data('getinstallmentdate');
                let installmentLateFee = $(this).data('installmentlatefee');
                $('.show-currency').text("USD");

                $('.due_payment_modal').attr('action', dataRoute);
                $('.property-title').text( `Property: ${dataProperty}`);
                $('.fixed_invest').text(`${symbol}${dataFixedAmount}`);
                $('.total_installments').text(totalInstallments);
                $('.due_installments').text(totalDueInstallments);
                $('.installment_duration').text(installmentDuration);
                $('.installment_last_date').text(installmentLastDate);
                $('.installment_last_date').text(installmentLastDate);
                $('.installment_late_fee').text(`${symbol}${installmentLateFee}`);
                $('.previous_total_pay').text(`${symbol}${parseInt(dataPreviousPay)}`);
                let totalDueAmount = parseInt(dataFixedAmount) - parseInt(dataPreviousPay);
                $('.total_due_amount').text(`${symbol}${totalDueAmount}`);
                $('.installment_amount').text(`${symbol}${installmentAmount}`);



                if (isInstallment == 1 && totalDueInstallments > 1){
                    $('.set_installment_amount').val(installmentAmount);
                    $('.set_totalDue_amount').val(totalDueAmount);
                    $('.set_get_installment_date').val(getInstallmentDate);
                    $('.set_total_due_amount').val(totalDueAmount);
                    $('.set_installment_late_fee').val(installmentLateFee);
                    $('.payInstallment').removeClass('d-none');
                }

                if (getInstallmentDate == 0){
                    let dueAmountWithLateFee = parseInt(totalDueAmount) + parseInt(installmentLateFee);
                    $('.invest-amount').val(dueAmountWithLateFee);
                    $('#amount').attr('readonly', true);
                }else{
                    $('.invest-amount').val(totalDueAmount);
                    $('#amount').attr('readonly', true);
                }
            });


            $(document).on('click', '#pay_installment', function () {
                let getInstallmentDate = $('.set_get_installment_date').val();
                let installmentAmount = $('.set_installment_amount').val();
                let installmentLateFee = $('.set_installment_late_fee').val();
                let totalDueAmount = $('.set_total_due_amount').val();

                if ($(this).prop("checked") == true) {
                    $(this).val(1);
                    if (getInstallmentDate == 0){
                        let dueAmountWithLateFee = parseInt(installmentAmount) + parseInt(installmentLateFee);
                        $('.invest-amount').val(dueAmountWithLateFee);
                        $('#amount').attr('readonly', true);
                    }else{
                        $('.invest-amount').val(installmentAmount);
                        $('#amount').attr('readonly', true);
                    }

                } else {
                    $(this).val(0);
                    if (getInstallmentDate == 0){
                        let dueAmountWithLateFee = parseInt(totalDueAmount) + parseInt(installmentLateFee);
                        $('.invest-amount').val(dueAmountWithLateFee);
                        $('#amount').attr('readonly', true);
                    }else{
                        $('.invest-amount').val(totalDueAmount);
                        $('#amount').attr('readonly', true);
                    }
                }
            });

            $(document).on('click', '.close_invest_modal', function () {
                if ($('#pay_installment').prop("checked") == true) {
                    $("#pay_installment").prop("checked", false);
                }
            });

            $(document).on('click', '.sendOffer', function () {
                var propertysendOfferModal = new bootstrap.Modal(document.getElementById('sendOfferModal'))
                propertysendOfferModal.show();

                let dataRoute = $(this).data('route');
                let dataProperty = $(this).data('property');

                $('.send_offer_modal').attr('action', dataRoute);
                $('.property-title').text(`Property: ${dataProperty}`);
                $('.show-currency').text("USD");

            });

            $(document).on('click', '.updateOffer', function () {
                var propertyupdateOfferModal = new bootstrap.Modal(document.getElementById('updateOfferModal'))
                propertyupdateOfferModal.show();

                let dataRoute = $(this).data('route');
                let dataProperty = $(this).data('property');
                let amount = $(this).data('amount');
                $('.show-currency').text("USD");

                $('.update_offer_modal').attr('action', dataRoute);
                $('.property-title').text(`Property: ${dataProperty}`);
                $('.amount').val(amount);
            });
        });
    </script>





<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="13885e63-7983-4230-b427-5a625356d49a";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>



    <!--start of Facebook Messenger Script-->
	<div id="fb-root"></div>
	<script>
		"use strict";
		$(document).ready(function () {
			var fb_app_id = "1826868814245944";
			window.fbAsyncInit = function () {
				FB.init({
					appId: fb_app_id,
					autoLogAppEvents: true,
					xfbml: true,
					version: 'v10.0'
				});
			};
			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s);
				js.id = id;
				js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		});
	</script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
	<div class="fb-customerchat" page_id="1826868814245944"></div>
    <!--End of Facebook Messenger Script-->



<script>
    "use strict";
    var root = document.querySelector(':root');
    root.style.setProperty('--primary', '#ff8647');
    root.style.setProperty('--secondary', '#000000');

</script>

</body>
</html>
