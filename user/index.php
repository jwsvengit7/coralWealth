
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['token'])){
    header("location: ../auth/login/php");

}
include "api-service.php";



?>
<html class="no-js" lang="en"  >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="kzjZpmxTLfqPeKdiGtMxVnrsVHLElyE8Wmvw20kZ">
    <meta name="description" content="CoraWealth, A Modern CoraWealth Real State Investment Platform">
<meta name="keywords" content="Real state investment,  CoraWealth, , CoraWealth website, invest, Investment Management system, investment script, Bug Finder, bug-finder, bugfinder.net, bugfinder">
<link rel="shortcut icon" href="https://corawealth.com/assets/uploads/logo/favicon.png" type="image/x-icon">

<link rel="apple-touch-icon" href="https://corawealth.com/assets/uploads/logo/logo.png">
<title>CoraWealth | Dashboard</title>
<link rel="icon" type="image/png" sizes="16x16" href="https://corawealth.com/assets/uploads/logo/favicon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="CoraWealth | Dashboard">

<meta itemprop="name" content="CoraWealth | Dashboard">
<meta itemprop="description" content="CoraWealth, A Modern CoraWealth Real State Investment Platform">
<meta itemprop="image" content="https://corawealth.com/assets/uploads/logo/meta.png600x315">

<meta property="og:type" content="website">
<meta property="og:title" content="CoraWealth,  A CoraWealth Real Estate Investment Platform">
<meta property="og:description" content="CoraWealth,  A CoraWealth Real Estate Investment Platform">
<meta property="og:image" content="https://corawealth.com/assets/uploads/logo/meta.png"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:url" content="https://corawealth.com/user/dashboard">

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

            <style>
            .balance-box {
                background: linear-gradient(to right,rgb(255,134,71),rgb(0,0,0));
            }
        </style>
    
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

    <div class="link-item active">
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
                    <span style="padding-top:5px"><?php echo $username; ?></span>
                            <!-- notification panel -->
                                                        <div class="notification-panel">
    <button class="dropdown-toggle">
        <i class="fal fa-bell"></i>
        <span class="count" >{{items.length}}</span>
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
          <img src=<?php echo $image; ?>
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
                    <input type="hidden" name="_token" value="kzjZpmxTLfqPeKdiGtMxVnrsVHLElyE8Wmvw20kZ">                </form>
            </li>
        </ul>
</div>
                        </span>
                </div>
            </nav>
                    <!-- Balance Box -->
    <div class="container-fluid">
        <div class="main row">
            <div class="col-12">
                <div class="row g-3">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card-box balance-box p-0 h-100">
                            <div class="user-account-number p-4 h-100">
                                <i class="account-wallet far fa-wallet"></i>
                                <div class="mb-4">
                                    <h5 class="text-white mb-2">
                                        Main Balance                                    </h5>
                                    <h3>
                                        <span class="text-white"><small><sup>$</sup></small><?php echo $userAmount;?></span>
                                    </h3>
                                </div>
                                <div class="">
                                    <h5 class="text-white mb-2">
                                        Interest Balance                                    </h5>
                                    <h3><span class="text-white otal_available__balance"><small><sup>$</sup></small><?php echo $interestAmount;?></span></h3>
                                </div>
                                <a href="https://corawealth.com/user/add-fund" class="cash-in"><i class="fal fa-plus me-1"></i> Cash In</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 d-sm-block d-none">
                        <div class="row g-3">
                            <div class="col-lg-12 col-6">
                                <div class="dashboard-box gr-bg-1">
                                    <h5 class="text-white">Total Deposit</h5>
                                    <h3 class="text-white"><small><sup>$</sup></small><span>0</span></h3>
                                    <i class="fal fa-file-invoice-dollar text-white"></i>
                                </div>
                            </div>

                            <div class="col-lg-12 col-6">
                                <div class="dashboard-box gr-bg-2">
                                    <h5 class="text-white">Total Payout</h5>
                                    <h3 class="text-white"><small><sup>$</sup></small><span>0</span></h3>
                                    <i class="fal fa-usd-circle text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-sm-block d-none">
                        <div class="row g-3">
                            <div class="col-xl-12 col-6">
                                <div class="dashboard-box gr-bg-3">
                                    <h5 class="text-white">Total Invest</h5>
                                    <h3 class="text-white"><small><sup>$</sup></small><span><?php echo $total_invest;?></span></h3>
                                    <i class="far fa-funnel-dollar text-white"></i>
                                </div>
                            </div>
                            <div class="col-xl-12 col-6 box">
                                <div class="dashboard-box gr-bg-4">
                                    <h5 class="text-white">Running Invest</h5>
                                    <h3 class="text-white"><small><sup>$</sup></small><span> <?php echo $invets_running;?></span></h3>
                                    <i class="far fa-funnel-dollar text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-lg-none">
                        <div class="quick-links">
                            <div class="row g-2 g-lg-4">
                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/property-market/investment-properties">
                                            <i class="fal fa-project-diagram"></i>
                                            <span>Invest</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/add-fund">
                                            <i class="fal fa-funnel-dollar" aria-hidden="true"></i>
                                            <span>Deposit</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/payout">
                                            <i class="fal fa-hand-holding-usd" aria-hidden="true"></i>
                                            <span>Withdraw</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/money-transfer">
                                            <i class="fal fa-exchange-alt"></i>
                                            <span>Transfer</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/transaction">
                                            <i class="fal fa-sack-dollar" aria-hidden="true"></i>
                                            <span>Transaction</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/ticket">
                                            <i class="fal fa-user-headset"></i>
                                            <span>Support</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/twostep-security">
                                            <i class="fal fa-badge-check"></i>
                                            <span>2fa</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3 col-4 col-sm-3">
                                    <div class="link-item">
                                        <a href="https://corawealth.com/user/profile">
                                            <i class="fal fa-user-cog"></i>
                                            <span>Settings</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <div class="container-fluid">
        <div class="main row">
            <div class="col-12">
                <div class="dashboard-box-wrapper d-none d-lg-block">
                    <div class="row g-3 mb-4">

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Total Investment</h5>
                                <h3>0</h3>
                                <i class="fal fa-lightbulb-dollar"></i>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Running Investment</h5>
                                <h3>0</h3>
                                <i class="fal fa-lightbulb-dollar"></i>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Due Investment</h5>
                                <h3>0</h3>
                                <i class="fal fa-lightbulb-dollar"></i>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Completed Investment</h5>
                                <h3>0</h3>
                                <i class="fal fa-lightbulb-dollar"></i>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Total Referral Bonus</h5>
                                <h3><small><sup>$</sup></small>0</h3>
                                <i class="fal fa-lightbulb-dollar"></i>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Last Referral Bonus</h5>
                                <h3><small><sup>$</sup></small><span>0</span></h3>
                                <i class="far fa-badge-dollar"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Total Earn</h5>
                                <h3><small><sup>$</sup></small><span>0</span></h3>
                                <i class="far fa-hand-holding-usd"></i>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 box">
                            <div class="dashboard-box">
                                <h5>Total Ticket</h5>
                                <h3>0</h3>
                                <i class="fal fa-ticket"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-lg-none mb-4">
                    <div class="card-box-wrapper owl-carousel card-boxes">
                        <div class="dashboard-box gr-bg-1">
                            <h5 class="text-white">Main Balance</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>100
                            </h3>
                            <i class="fal fa-funnel-dollar text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-2">
                            <h5 class="text-white">Interest Balance</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-hand-holding-usd text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-3">
                            <h5 class="text-white">Total Deposit</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-box-usd text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-5">
                            <h5 class="text-white">Total Invest</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-search-dollar text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-5">
                            <h5 class="text-white">Running Invest</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-search-dollar text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-4">
                            <h5 class="text-white">Total Earn</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-badge-dollar text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-6">
                            <h5 class="text-white">Total Payout</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-usd-circle text-white"></i>
                        </div>
                        <div class="dashboard-box gr-bg-7">
                            <h5 class="text-white">Total Referral Bonus</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-lightbulb-dollar text-white"></i>
                        </div>

                        <div class="dashboard-box gr-bg-8">
                            <h5 class="text-white">Last Referral Bonus</h5>
                            <h3 class="text-white">
                                <small><sup>$</sup></small>0
                            </h3>
                            <i class="fal fa-box-open text-white"></i>
                        </div>

                        <div class="dashboard-box gr-bg-9">
                            <h5 class="text-white">Total Ticket</h5>
                            <h3 class="text-white">0</h3>
                            <i class="fal fa-ticket text-white"></i>
                        </div>
                    </div>
                </div>

                <!---- charts ----->
                <div class="chart-information d-none d-lg-block">
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="progress-wrapper">
                                    <div id="container" class="apexcharts-canvas"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="progress-wrapper2">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 box mb-3">
                                            <div class="badge-dashboard-box2" id="custom_badge_dashboad_box2">
                                                <h5 class="mb-0">Current Level</h5>
                                                <div>

                                                    <div class="level-box">
                                                        <h6 class="m-0">
                                                                                                                            <i class="fa fa-times"></i>
                                                                                                                    </h6>
                                                                                                            </div>

                                                                                                            <p class="opacity-0">no level</p>
                                                                                                    </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 box mb-3">
                                            <div class="badge-dashboard-box1">
                                                <h5>Level Bonus</h5>
                                                <h3><small><sup>$</sup></small><span>0</span></h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <div class="badge-dashboard-box2">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5>All Badges</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <?php
                                                   
                                              
                                                   $badgeNumber = 0;
                                                   
                                                   foreach ($badges as $badge) {
                                                       $badgeNumber++; 
                                                       if ($badge_status == $badge['name'] && ($badge_status == "Member" || $badge_status == "Leader")) {
                                                     
                                                           $lockedClass = "";
                                                       } else {
                                                           $lockedClass = "locked";
                                                       }
                                                   ?>
                                                       <div class="col-xl-3 col-md-6 box">
                                                           <div class="badge-box badge-box-two <?php echo $lockedClass; ?>" id="badge-box-two">
                                                               <img src="../img/<?php echo $badge["image"]; ?>" alt="" />
                                                               <p class="mb-3 text-center m-auto"><?php echo $badge['name']; ?></p>
                                                               <?php if ($lockedClass == "locked"){ ?>
                                                                   <div class="lock-icon">
                                                                       <i class="far fa-lock-alt"></i>
                                                                   </div>
                                                              <?php }
                                                              ?>
                                                           </div>
                                                       </div>
                                                   <?php
                                                    
                                                   }
                                                   
                                                   
?>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- refferal-information -->
                <div class="search-bar refferal-link  g-4 mt-4 mb-4 coin-box-wrapper">
                    <form class="mb-3">
                        <div class="row g-3 align-items-end">
                            <div class="input-box col-lg-12">
                                <label for="">Referral Link</label>
                                <div class="input-group mt-0">
                                    <input
                                        type="text"
                                        value=<?php echo $myownreferrerID;?>
                                        class="form-control"
                                        id="sponsorURL"
                                        readonly />
                                    <button class="gold-btn copyReferalLink" type="button"><i class="fal fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
        </div>
    </div>
</div>
<?php
include "js.php";
?>



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

    <script src="https://corawealth.com/assets/themes/original/js/apexcharts.js"></script>

    <script>
        "use strict";

        var options = {
            theme: {
                mode: "light",
            },

            series: [
                {
                    name: "Deposit",
                    color: 'rgba(255, 72, 0, 1)',
                    data: [0,0,0,0,0,0,0,0,0,0,0,0]
                },
                {
                    name: "Deposit Bonus",
                    color: 'rgba(39, 144, 195, 1)',
                    data: [0,0,0,0,0,0,0,0,0,0,0,0]
                },
                {
                    name: "Investment",
                    color: 'rgba(247, 147, 26, 1)',
                    data: [0,0,0,0,0,0,0,0,0,0,0,0]
                },
                {
                    name: "Investment Bonus",
                    color: 'rgba(136, 203, 245, 1)',
                    data: [0,0,0,0,0,0,0,0,0,0,0,0]
                },
                {
                    name: "Profit",
                    color: 'rgba(247, 147, 26, 1)',
                    data: [0,0,0,0,0,0,0,0,0,0,0,0]
                },
                {
                    name: "Payout",
                    color: 'rgba(240, 16, 16, 1)',
                    data: [0,0,0,0,0,0,0,0,0,0,0,0]
                },
            ],
            chart: {
                type: 'bar',
                height: 350,
                background: '#fff',
                toolbar: {
                    show: false
                }

            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ["January","February","March","April","May","June","July","August","September","October","November","December"],

            },
            yaxis: {
                title: {
                    text: ""
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                colors: ['#000'],
                y: {
                    formatter: function (val) {
                        return "$" + val + ""
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#container"), options);
        chart.render();

        $(document).on('click', '#details', function () {
            var title = $(this).data('servicetitle');
            var description = $(this).data('description');
            $('#title').text(title);
            $('#servicedescription').text(description);
        });

        $(document).ready(function () {
            let isActiveCronNotification = '0';
            if (isActiveCronNotification == 1)
                $('#cron-info').modal('show');
            $(document).on('click', '.copy-btn', function () {
                var _this = $(this)[0];
                var copyText = $(this).parents('.input-group-append').siblings('input');
                $(copyText).prop('disabled', false);
                copyText.select();
                document.execCommand("copy");
                $(copyText).prop('disabled', true);
                $(this).text('Coppied');
                setTimeout(function () {
                    $(_this).text('');
                    $(_this).html('<i class="fas fa-copy"></i>');
                }, 500)
            });


            $(document).on('click', '.loginAccount', function () {
                var route = $(this).data('route');
                $('.loginAccountAction').attr('action', route)
            });

            $(document).on('click', '.copyReferalLink', function () {
                var _this = $(this)[0];
                var copyText = $(this).siblings('input');
                $(copyText).prop('disabled', false);
                copyText.select();
                document.execCommand("copy");
                $(copyText).prop('disabled', true);
                $(this).text('Copied');
                setTimeout(function () {
                    $(_this).text('');
                    $(_this).html('<i class="fal fa-copy"></i>');
                }, 500)
            });
        })
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
