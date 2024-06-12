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
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/front/') ?>assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/front/') ?>assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/front/') ?>assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= base_url('assets/front/') ?>assets/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?= base_url('assets/front/') ?>assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<!-- Fontawesome -->
	<link type="text/css" href="<?= base_url('assets/') ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

	<!-- Nucleo icons -->
	<link rel="stylesheet" href="<?= base_url('assets/dashboard/') ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">

	<!-- Prism -->
	<link type="text/css" href="<?= base_url('assets/') ?>vendor/prismjs/themes/prism.css" rel="stylesheet">

	<!-- Front CSS -->
	<link type="text/css" href="<?= base_url('assets/front/') ?>css/front.css" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-1"></script>
<script>   window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-141734189-1'); </script> -->
</head>

<body>

	<!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


	<main>



		<!-- Hero -->
		<section class="section pb-4 pb-lg-8 bg-soft">
			<div class="container">
				<div class="row justify-content-between align-items-center">
				<div class="col-12 col-md-6 order-2 order-lg-1">
						<img src="<?= base_url('assets/front/') ?>assets/img/illustrations/feature-illustration-2.svg" alt="">
					</div>
					<div class="col-12 col-md-5 order-md-2 mt-2">
						<h3 class="display-3 mb-3">Registro de nuevo usuario</h3>
						<div class="mt-4">
							<form role="form">
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-single-02"></i></span>
										</div>
										<input class="form-control" placeholder="Nombres" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-circle-08"></i></span>
										</div>
										<input class="form-control" placeholder="Apellidos" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
										</div>
										<input class="form-control" placeholder="Institución" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
										</div>
										<input class="form-control" placeholder="Cargo" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-email-83"></i></span>
										</div>
										<input class="form-control" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input class="form-control" placeholder="Password" type="password">
									</div>
								</div>
								<div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
								<div class="row my-4">
									<div class="col-12">
										<div class="custom-control custom-control-alternative custom-checkbox">
											<input class="custom-control-input" id="customCheckRegister" type="checkbox">
											<label class="custom-control-label" for="customCheckRegister">
												<span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
											</label>
										</div>
									</div>
								</div>
								<div class="text-center">
									<button type="button" class="btn btn-primary mt-4">Enviar solicitud de registro</button>
								</div>
						</div>
					</div>
				</div>
			</div>

		</section>


	</main>

	<!-- Core -->
	<script src="<?= base_url('assets/') ?>vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/headroom.js/dist/headroom.min.js"></script>

	<!-- Vendor JS -->
	<script src="<?= base_url('assets/') ?>vendor/onscreen/dist/on-screen.umd.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/jarallax/dist/jarallax.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<!-- Impact JS -->
	<script src="<?= base_url('assets/front/') ?>assets/js/front.js"></script>


</body>

</html>
