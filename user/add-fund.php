
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
    <meta name="csrf-token" content="1UTfSHrydIf4KsA4gGW4zLQ261YSK13RwZGIXNvr">
    <meta name="description" content="CoraWealth, A Modern CoraWealth Real State Investment Platform">
<meta name="keywords" content="Real state investment,  CoraWealth, , CoraWealth website, invest, Investment Management system, investment script, Bug Finder, bug-finder, bugfinder.net, bugfinder">
<link rel="shortcut icon" href="https://corawealth.com/assets/uploads/logo/favicon.png" type="image/x-icon">

<link rel="apple-touch-icon" href="https://corawealth.com/assets/uploads/logo/logo.png">
<title>CoraWealth |     Add Fund</title>
<link rel="icon" type="image/png" sizes="16x16" href="https://corawealth.com/assets/uploads/logo/favicon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="CoraWealth |     Add Fund">

<meta itemprop="name" content="CoraWealth |     Add Fund">
<meta itemprop="description" content="CoraWealth, A Modern CoraWealth Real State Investment Platform">
<meta itemprop="image" content="https://corawealth.com/assets/uploads/logo/meta.png600x315">

<meta property="og:type" content="website">
<meta property="og:title" content="CoraWealth,  A CoraWealth Real Estate Investment Platform">
<meta property="og:description" content="CoraWealth,  A CoraWealth Real Estate Investment Platform">
<meta property="og:image" content="https://corawealth.com/assets/uploads/logo/meta.png"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:url" content="https://corawealth.com/user/add-fund">

<meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" type="text/css" href="https://corawealth.com/assets/themes/original/css/bootstrap.min.css"/>
    <link href="https://corawealth.com/assets/global/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://corawealth.com/assets/themes/original/css/animate.css">
    <link rel="stylesheet" href="https://corawealth.com/assets/global/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://corawealth.com/assets/global/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://corawealth.com/assets/themes/original/css/range-slider.css">
    <link rel="stylesheet" type="text/css" href="https://corawealth.com/assets/themes/original/css/fancybox.css">

    
    <link rel="stylesheet" type="text/css" href="https://corawealth.com/assets/themes/original/css/style.css">
    <script src="https://corawealth.com/assets/themes/original/js/fontawesomepro.js"></script>
    <script src="https://corawealth.com/assets/themes/original/js/modernizr.custom.js"></script>

    
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

    <div class="link-item active">
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
                    <input type="hidden" name="_token" value="1UTfSHrydIf4KsA4gGW4zLQ261YSK13RwZGIXNvr">                </form>
            </li>
        </ul>
</div>
                        </span>
                </div>
            </nav>
            
<!-- add fund -->
<section class="payment-gateway mt-4">
    <div class="container-fluid">
       <div class="row ms-2 mt-4 mb-2">
           <div class="col">
               <div class="header-text-full">
                   <h3 class="dashboard_breadcurmb_heading mb-1">Add Fund</h3>
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="https://corawealth.com/user/dashboard">Dashboard</a>
                           </li>
                           <li class="breadcrumb-item active" aria-current="page">Add Fund</li>
                       </ol>
                   </nav>
               </div>
           </div>
       </div>

       <div class="row mt-4 ms-2 me-2">
                        
                            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img
                            class="img-fluid gateway"
                            src="https://corawealth.com/assets/uploads/gateway/61d16f5313ee41641115475.jpg"
                            alt="Bank Transfer"
                        >
                        <button type="button"
                            data-id="1000"
                            data-name="Bank Transfer"
                            data-currency="BDT"
                            data-gateway="bank-transfer"
                            data-min_amount="1000"
                            data-max_amount="10000"
                            data-percent_charge="0"
                            data-fix_charge="5"
                            class="gold-btn addFund addFundCustomButton"
                            data-bs-toggle="modal" data-bs-target="#addFundModal">Pay Now                        </button>
                    </div>
                </div>
                            
                           
                            
                         
                            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img
                            class="img-fluid gateway"
                            src="https://corawealth.com/assets/uploads/gateway/5f645d432b9c0.jpg"
                            alt="Stripe "
                        >
                        <button type="button"
                            data-id="2"
                            data-name="Stripe "
                            data-currency="USD"
                            data-gateway="stripe"
                            data-min_amount="1000"
                            data-max_amount="50000"
                            data-percent_charge="0"
                            data-fix_charge="0.5"
                            class="gold-btn addFund addFundCustomButton"
                            data-bs-toggle="modal" data-bs-target="#addFundModal">Pay Now                        </button>
                    </div>
                </div>
                           
                           
                   </div>
    </div>
</section>

            </div>
    </div>
</div>

        <!-- Modal -->
        <div class="modal fade" id="addFundModal" tabindex="-1" aria-labelledby="planModalLabel" data-bs-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title method-name" id="planModalLabel"></h4>
                        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="payment-form">
                                                            <p class="depositLimit lebelFont"></p>
                                <p class="depositCharge lebelFont"></p>
                            
                            <input type="hidden" class="gateway" name="gateway" value="">

                            <form>
                                <div class="form-group mb-30 mt-3">
                                    <div class="box">
                                        <h5 class="text-dark">Amount</h5>

                                        <div class="input-group input-box">
                                            <input
                                                type="text" class="amount form-control" name="amount"
                                                                                            />
                                            <button class="show-currency btn-custom"></button>
                                        </div>
                                    </div>
                                    <pre class="text-danger errors"></pre>
                                </div>
                            </form>
                        </div>

                        <div class="payment-info text-center">
                            <img id="loading" src="https://corawealth.com/assets/admin/images/loading.gif" alt="loader" class="w-15"/>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-custom checkCalc">Next</button>
                    </div>

                </div>
            </div>
        </div>
 <?php
include "js.php";
 ?>
<!-- custom script -->
<script src="https://corawealth.com/assets/themes/original/js/script.js"></script>


<script>
    'use strict';

    $(".card-boxes").owlCarousel({
        loop: true,
        margin: -25,
        rtl: false,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
        },
    });

    // dashboard sidebar
    window.onload = function () {
        var el = document.getElementById('sidebarCollapse');
        if (el == null) {
            return 0;
        } else {

            el.addEventListener("click", () => {
                document.getElementById("sidebar").classList.toggle("active");
                document.getElementById("content").classList.toggle("active");
            });
        }

        // for datepicker
        $(function () {
            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#salutation").selectmenu();
        });
    }

            let pushNotificationArea = new Vue({
        el: "#pushNotificationArea",
        data: {
            items: [],
        },
        mounted() {
            this.getNotifications();
            this.pushNewItem();
        },
        methods: {
            getNotifications() {
                let app = this;
                axios.get("https://corawealth.com/user/push-notification-show")
                    .then(function (res) {
                        app.items = res.data;
                    })
            },
            readAt(id, link) {
                let app = this;
                let url = "https://corawealth.com/user/push-notification-readAt/0";
                url = url.replace(/.$/, id);
                axios.get(url)
                    .then(function (res) {
                        if (res.status) {
                            app.getNotifications();
                            if (link != '#') {
                                window.location.href = link
                            }
                        }
                    })
            },
            readAll() {
                let app = this;
                let url = "https://corawealth.com/user/push.notification.readAll";
                axios.get(url)
                    .then(function (res) {
                        if (res.status) {
                            app.items = [];
                        }
                    })
            },
            pushNewItem() {
                let app = this;
                let pusher = new Pusher("7f333d3a98d4f2", {
                    encrypted: true,
                    cluster: "ap2"
                });
                let channel = pusher.subscribe('user-notification.' + "178");
                channel.bind('App\\Events\\UserNotification', function (data) {
                    app.items.unshift(data.message);
                });
                channel.bind('App\\Events\\UpdateUserNotification', function (data) {
                    app.getNotifications();
                });
            }
        }
    });
    
</script>


    <script>
        $('#loading').hide();
        "use strict";
        var id, minAmount, maxAmount, baseSymbol, fixCharge, percentCharge, currency, amount, gateway;
        $('.addFund').on('click', function () {
            id = $(this).data('id');
            gateway = $(this).data('gateway');
            minAmount = $(this).data('min_amount');
            maxAmount = $(this).data('max_amount');
            baseSymbol = "$";
            fixCharge = $(this).data('fix_charge');
            percentCharge = $(this).data('percent_charge');
            currency = $(this).data('currency');
            $('.depositLimit').text(`Transaction Limit: ${minAmount} - ${maxAmount}  ${baseSymbol}`);

            var depositCharge = `Charge: ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' + percentCharge + ' % ' : ''}`;
            $('.depositCharge').text(depositCharge);

            $('.method-name').text(`Payment By ${$(this).data('name')} - ${currency}`);
            $('.show-currency').text("USD");
            $('.gateway').val(currency);

        });

        $(".checkCalc").on('click', function () {
            $('.payment-form').addClass('d-none');

            $('#loading').show();
            $('.modal-backdrop.fade').addClass('show');
            amount = $('.amount').val();
            $.ajax({
                url: "https://corawealth.com/user/add-fund",
                type: 'POST',
                data: {
                    amount,
                    gateway
                },
                success(data) {

                    $('.payment-form').addClass('d-none');
                    $('.checkCalc').closest('.modal-footer').addClass('d-none');

                    var htmlData = `
                     <ul class="list-group text-center">
                        <li class="list-group-item bg-transparent list-text customborder">
                            <img src="${data.gateway_image}"
                                style="max-width:100px; max-height:100px; margin:0 auto;"/>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            Amount:
                            <strong>${data.amount} </strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">Charge:
                                <strong>${data.charge}</strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            Payable: <strong> ${data.payable}</strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            Conversion Rate: <strong>${data.conversion_rate}</strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            <strong>${data.in}</strong>
                        </li>

                        ${(data.isCrypto == true) ? `
                        <li class="list-group-item bg-transparent list-text customborder">
                            ${data.conversion_with}
                        </li>
                        ` : ``}

                        <li class="list-group-item bg-transparent">
                        <a href="${data.payment_url}" class="btn btn-custom addFund text-white">Pay Now</a>
                        </li>
                        </ul>`;

                    $('.payment-info').html(htmlData)
                },
                complete: function () {
                    $('#loading').hide();
                },
                error(err) {
                    var errors = err.responseJSON;
                    for (var obj in errors) {
                        $('.errors').text(`${errors[obj]}`)
                    }

                    $('.payment-form').removeClass('d-none');
                }
            });
        });


        $('.close').on('click', function (e) {
            $('#loading').hide();
            $('.payment-form').removeClass('d-none');
            $('.checkCalc').closest('.modal-footer').removeClass('d-none');
            $('.payment-info').html(``)
            $('.amount').val(``);
            $("#addFundModal").modal("hide");
            $('.errors').text(``)
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
