<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <title>Impact - Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Impact - Landing Page">

    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/front/')?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/front/')?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/front/')?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url('assets/front/')?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=base_url('assets/front/')?>assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="<?=base_url('assets/')?>vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Nucleo icons -->
    <link rel="stylesheet" href="<?=base_url('assets/dashboard/')?>assets/vendor/nucleo/css/nucleo.css" type="text/css">

    <!-- Prism -->
    <link type="text/css" href="<?=base_url('assets/')?>vendor/prismjs/themes/prism.css" rel="stylesheet">

    <!-- Front CSS -->
    <link type="text/css" href="<?=base_url('assets/front/')?>css/front.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-1"></script>
<script>   window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-141734189-1'); </script> -->
</head>

<body>

    <!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header-global">
        <nav id="navbar-main"
            class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-primary">
            <div class="container">
                <a class="navbar-brand @@logo_classes" href="../../index.html">
                    <img class="navbar-brand-dark common" src="<?=base_url('assets/front/')?>assets/img/brand/datalogos-light.png" height="35"
                        alt="Logo light">
                    <img class="navbar-brand-light common" src="<?=base_url('assets/front/')?>assets/img/brand/datalogos-dark.png" height="35"
                        alt="Logo dark">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="../../index.html">
                                    <!--<img src="<?=base_url('assets/front/')?>assets/img/brand/dark.svg" height="35" alt="Logo Impact">-->
                                    <img src="<?=base_url('assets/front/')?>assets/img/brand/datalogos-dark.png" height="35" alt="Logo Impact">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover justify-content-center">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">Registro de asistencia</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block @@cta_button_classes">
                    <a href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank"
                        class="btn btn-md btn-secondary animate-up-2"> Iniciar
                        sesión</a>
                </div>
                <div class="d-flex d-lg-none align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element">
                <span class="loader-animated-dot"></span>
                <img src="<?=base_url('assets/front/')?>assets/img/brand/dark-loader.svg" height="40" alt="Impact logo">
            </div>
        </div>

        <!-- Hero -->
        <section class="section-header pb-7 pb-lg-11 bg-soft">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 order-2 order-lg-1">
                        <img src="<?=base_url('assets/front/')?>assets/img/illustrations/hero-illustration.svg" alt="">
                    </div>
                    <div class="col-12 col-md-5 order-1 order-lg-2">
                        <h1 class="display-2 mb-3">Tools to grow your traffic</h1>
                        <p class="lead">Impact helps you learn why your competitors rank so high and what you need to do
                            to outrank them.</p>
                        <div class="mt-4">
                            <form action="#" class="d-flex flex-column mb-5 mb-lg-0">
                                <input class="form-control" type="text" name="full-name" placeholder="Full name"
                                    required>
                                <input class="form-control my-3" type="email" name="email" placeholder="Your email"
                                    required>
                                <button class="btn btn-primary" type="submit">Create your account</button>
                                <div class="form-group form-check mt-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label form-check-sign-white" for="exampleCheck1">I agree to
                                        the <a href="#">Terms & Conditions</a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>




        <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
            <div class="pattern pattern-soft top"></div>
            <div class="container">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="font-weight-normal mb-0">© <a href="https://themesberg.com?ref=creativetim*"
                                    target="_blank">Themesberg</a> & <a href="https://creative-tim.com">Creative Tim</a>
                                <span class="current-year"></span>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>

    <!-- Core -->
    <script src="<?=base_url('assets/')?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?=base_url('assets/')?>vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Impact JS -->
    <script src="<?=base_url('assets/front/')?>assets/js/front.js"></script>


</body>

</html>
