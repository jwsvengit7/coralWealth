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
    <!-- Include SweetAlert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<!-- Include SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  </head>

  <body>
 

    </script>
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
    <form class="login-form" id="login">
        <h3>Login Here</h3>
        <div style="border-bottom: 4px solid #ff8647;width: 150px;margin-bottom: 20px;"></div>
        <p>Welcome Back, Login To Your Account</p>
   
        <label>Email</label>
        <p></p>
        <input name="email" type="email" class="form-control" required/>

        <label>Password</label>
        <p></p>
        <input  name="password" type="password"  class="form-control" required/>

        <label class="checked">
           <span> <input type="checkbox">&nbsp;&nbsp;&nbsp;Remember me</span>
           <a href="forget-password.php">Lost your password?</a>
        </label>
        <p></p>
        <button class="default-btn">
            Login

        </button>
        <p></p>
        <label>
            Don’t have an account?&nbsp; <a href="signup.php" style="color:#ff8647">Create Account</a>
        </label>

</form>

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

<div class="loader">
  <img src="../img/loader.gif"  width="50" height="50"/>
</div>
   
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

$(()=>{
  $("#login").on("submit",function(e){
    e.preventDefault();
    var email = $("input[name='email']").val();
        var password = $("input[name='password']").val();

        var inputData = {
            email: email,
            password: password
        };

    $.ajax({
    url:"http://localhost/coralwealth/topadmin/src/api/Login.php",

    type: "POST",
    contentType: "application/json",
    data: JSON.stringify(inputData),
    cache:false,
    beforeSend:()=>{
      $(".loader").css({"display":"flex"})
    },
    success: (data, textStatus, jqXHR) => {
    $(".loader").css({ "display": "none" });
    console.log(data);
    if (jqXHR.status === 200) {
      window.location.href = "http://localhost/coralwealth/user/index.php"; 
      swal("ALERT!", data.msg, "success");
    } else {
      swal("ALERT!", data.msg, "error");
    }
  },
  error: (jqXHR, textStatus, errorThrown) => {
    $(".loader").css({ "display": "none" });
    swal("Error!", "An error occurred while processing your request.", "error");
    console.log(jqXHR.status); 
  }
  })
})
  })

</script>
<script>
        // Wait for the page to load
$(document).ready(function(){
  // Show the preloader when the page starts loading
  $('.preloader').show();

  // Hide the preloader once the page and all resources are loaded
  $(window).on('load', function(){
    $('.preloader').fadeOut('slow');
  });
});

    </script>
  </body>
</html>
