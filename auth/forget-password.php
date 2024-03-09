<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Real_state || Home</title>
    <link rel="icon" href="../img/favicon.png" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <link rel="stylesheet" href="../css/animate.css" />

    <link rel="stylesheet" href="../css/owl.carousel.min.css" />

    <link rel="stylesheet" href="../css/themify-icons.css" />

    <link rel="stylesheet" href="../css/flaticon.css" />

    <link rel="stylesheet" href="../css/magnific-popup.css" />

    <link rel="stylesheet" href="fontawesome/../css/all.min.css" />

    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>
    <style>
        /* Styles for the preloader */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: red;
  z-index: 9999;
  display: none;
}

.spinner {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid #3498db;
  width: 60px;
  height: 60px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

    </style>


      <div class="preloader">
        <div class="spinner"></div>
      </div>
      
      <!-- Your page content -->
      <div class="content">
        <!-- Place your content here -->
      </div>
      <?php

include "header.php";

?>

<div class="container">
  <div class="form-div">
    <div class="login-form">
        <h3>Forget Password</h3>
        <div style="border-bottom: 4px solid #ff8647;width: 150px;margin-bottom: 20px;"></div>
        <p>Find my Account Here</p>
   
        <label>Email</label>
        <p></p>
        <input  class="form-control"/>


  
       <label>
        <button class="default-btn">
            Forget Password

        </button>
       </label>
        <p></p>
        <label>
            Don’t have an account?&nbsp; <a href="signup.html" style="color:#ff8647">Create Account</a>
        </label>

    </div>

  </div>

</div>




    <section class="icon-row">
        <div class="container-icon"> 
          <div class="icon">
            <div class="icon-box">
              <img src="../img/icon1.png"  width="40"/>
  
            </div>
            <h3>Passive Income</h3>
            <p>Earn rental income and receive deposits quarterly</p>
  
        </div>
        <div class="icon">
          <div class="icon-box">
            <img src="../img/icon2.png"  width="40"/>
  
          </div>
          <h3>Secure & Cost-efficient</h3>
          <p>Digital security is legally compliant and tangible for qualified investors</p>
  
      </div>
      <div class="icon">
        <div class="icon-box">
          <img src="../img/icon3.png"  width="40"/>
  
        </div>
        <h3>Transparency</h3>
        <p>Easily consult the full documentation for each property.</p>
  
    </div>
    <div class="icon">
      <div class="icon-box">
        <img src="../img/icon4.png"  width="40"/>
  
      </div>
      <h3>Support</h3>
      <p>We are available 24 hours a day and 7 days a week</p>
  
  </div>
  
        </div>
    </section>


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

    <script src="../js/jquery-1.12.1.min.js"></script>

    <script src="../js/popper.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/jquery.magnific-popup.js"></script>

    <script src="../js/owl.carousel.min.js"></script>

    <script src="../js/jquery.easing.min.js"></script>

    <script src="../js/custom.js"></script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
  
  <script>
        // Wait for the page to load
$(document).ready(function(){
  // Show the preloader when the page starts loading
  $('.preloader').show();

  // Hide the preloader once the page and all resources are loaded
  $(window).on('load', function(){
    // $('.preloader').fadeOut('slow');
  });
});

    </script>
  </body>
</html>
