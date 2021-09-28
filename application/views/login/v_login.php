
<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.0
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login - - SmartAdmin v4.0.1
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
       <!--  <link rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/app.bundle.css"> -->
       <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/img/logo_only_85X85.png">
        <!-- base css -->
        <? for($i=0;$i<count($css);$i++){echo "<link href='".$css[$i]."' rel='stylesheet'>";} ?>
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="<?= base_url()?>assets/css/page-login.css">
    </head>
    <body>
        <div class="blankpage-form-field">
            <div class="blankpage-header text-center p-3">
               <img src="<?= base_url('assets/img/horizontal_250x111.png')?>" alt="lpdb kumkm" aria-roledescription="logo">
            </div>
            
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    
                    <span class="page-logo-text mr-1"><b>Sistem Informasi Aplikasi Belanja<b></span>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <form action="intel_introduction.html">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input type="email" id="username" class="form-control" placeholder="your username" >
                        <span class="help-block">
                            Your unique username to app
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="password">
                        <span class="help-block">
                            Your password
                        </span>
                    </div>
                    <div class="form-group text-left">
                       <!--  <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-default float-right">Secure login</button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
                <?= $footer ?>
            </div>
        </div>
        <video poster="<?= base_url()?>assets/img/backgrounds/cart2.jpg" id="bgvid" playsinline autoplay muted loop>
            <!-- <source src="<?//= base_url()?>assets/media/video/cc.webm" type="video/webm"> -->
            <!-- <source src="<?//= base_url()?>assets/media/video/yuk_belanja.mp4" type="video/mp4"> -->
        </video>
        <!-- base vendor bundle: 
             DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
                        + pace.js (recommended)
                        + jquery.js (core)
                        + jquery-ui-cust.js (core)
                        + popper.js (core)
                        + bootstrap.js (core)
                        + slimscroll.js (extension)
                        + app.navigation.js (core)
                        + ba-throttle-debounce.js (core)
                        + waves.js (extension)
                        + smartpanels.js (extension)
                        + src/../jquery-snippets.js (core) -->
        <script src="<?= base_url()?>assets/js/vendors.bundle.js"></script>
        <script src="<?= base_url()?>assets/js/app.bundle.js"></script>
        <!-- Page related scripts -->
    </body>
</html>
