<div id="sidebar" class="">
    <div class="sidebar-top">
        <a class="navbar-brand d-none d-lg-block" href="https://corawealth.com"> <img src="https://corawealth.com/assets/uploads/logo/logo.png" alt="CoraWealth" /></a>
        <div class="mobile-user-area d-lg-none">
            <div class="thumb">
                <img class="img-fluid user-img" src="https://corawealth.com/assets/admin/images/default.png" alt="...">
                            </div>
            <div class="content">
                <h5 class="mt-1 mb-1">Temple Jack Chiorlu</h5>
                <span class="">jwsven</span>
                            </div>
        </div>
        <button class="sidebar-toggler d-lg-none" onclick="toggleSideMenu()">
            <i class="fal fa-times"></i>
        </button>
    </div>
    
    <ul class="main">
        <li >
            <a class="" href="index.php"><i class="fal fa-house-flood"></i>Dashboard</a>
        </li>

        
        <li>
            <a
                class="dropdown-toggle propertyMarketActive"
                data-bs-toggle="collapse"
                href="#dropdownCollapsible"
                role="button"
                aria-expanded="false"
                aria-controls="collapseExample">
                <i class="fal fa-car-building"></i>Property Market            </a>
            <div class="collapse show dropdownCollapsible" id="dropdownCollapsible">
                <ul class="" id="pills-tab" role="tablist">
                    <li  role="presentation">
                        <a class="" href="my-offer.php" ><i class="fal fa-sack-dollar"></i>Investment Properties</a>
                    </li>
                                   
                               
                                    </ul>
            </div>
        </li>

        <li>
            <a class="" href="history.php"><i class="fal fa-history"></i>Invest History</a>
        </li>

        <li>
            <a class="" href="WishList-property.php"><i class="fal fa-heart"></i>WishList</a>
        </li>

        <li>
            <a class="" href="add-fund.php"><i class="fal fa-funnel-dollar"></i>Add Fund</a>
        </li>

        <li>
            <a class="" href="fund-history.php"><i class="fal fa-file-invoice-dollar"></i>Fund History</a>
        </li>


        <li>
            <a class="" href="money-transfer.php"><i class="fal fa-exchange-alt"></i>Money Transfer</a>
        </li>

        <li>
            <a class="" href="https://corawealth.com/user/transaction"><i class="fal fa-money-check-alt"></i>Transaction</a>
        </li>

        <li>
            <a class="" href="https://corawealth.com/user/payout"><i class="fal fa-credit-card"></i>Payout</a>
        </li>
        <li>
            <a class="" href="https://corawealth.com/user/payout-history"><i class="fal fa-usd-square"></i>Payout History</a>
        </li>

        <li>
            <a class="" href="https://corawealth.com/user/referral"><i class="fal fa-sync"></i>My Referral</a>
        </li>
        <li>
            <a class="" href="https://corawealth.com/user/referral-bonus"><i class="fal fa-hand-holding-usd"></i>Referral Bonus</a>
        </li>

        <li>
            <a class="" href="https://corawealth.com/user/badges"><i class="fal fa-badge-check"></i>Badges</a>
        </li>

        <li>
            <a class="" href="https://corawealth.com/user/ticket"><i class="fal fa-ticket"></i>Support ticket</a>
        </li>

        <li class="d-lg-none">
            <a href="https://corawealth.com/user/twostep-security">
                <i class="fal fa-lock"></i> 2FA Security            </a>
        </li>

        <li class="d-lg-none">
            <a href="https://corawealth.com/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fal fa-sign-out-alt"></i> Logout            </a>
            <form id="logout-form" action="https://corawealth.com/logout" method="POST" class="d-none">
                <input type="hidden" name="_token" value="4xGEggWXMKvdbIBnzIPmpw7cEcSAgae0xwpUgy8j">            </form>
        </li>
    </ul>

            </div>