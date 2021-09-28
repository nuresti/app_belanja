<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Page Not Found | Error 404
        </title>
        <meta name="description" content="Big Error">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>assets/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>assets/css/app.bundle.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/img/logo_only_85X85.png">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <!-- Optional: page related CSS-->
    </head>
    <body>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper alt">
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">
                <div class="h-alt-f d-flex flex-column align-items-center justify-content-center text-center">
                    <h1 class="page-error color-fusion-500">
                        ERROR <span class="text-gradient">404</span>
                        <small class="fw-500">
                            Something <u>went</u> wrong!
                        </small>
                    </h1>
                    <h3 class="fw-500 mb-5">
                        You have experienced a technical error. We apologize.
                    </h3>
                    <h4>
                        We are working hard to correct this issue. Please wait a few moments and try your search again.
                    </h4>
                    <br />
                    <a href="<?=base_url('dashboard') ?>"><button type="button" class="btn btn-outline-info">Go To Home</button></a>
                </div>
            </main>
            <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2021 © LPDB-KUMKM Powered by&nbsp;<a href='https://www.lpdb.id' class='text-primary fw-500' title='divisi TSI' target='_blank'>Divisi TSI</a></span>
                </div>
            </footer>
            <!-- END Page Footer -->
        </div>
        <!-- END Page Wrapper -->
    <script src="<?=base_url()?>assets/js/vendors.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/app.bundle.js"></script>                    
    </body>
</html>
