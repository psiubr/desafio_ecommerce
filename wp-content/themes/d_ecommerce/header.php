<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title page  -->
	<title>Guilherme - Ecommerce</title>
	<!-- Favicon -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/new.png">
	<!--styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugin/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl-carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/themify-icons.css">
	<!-- <script src="https://use.fontawesome.com/17e50bcc9c.js"></script> -->
</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	?>
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header -->
	<header class="header shop">
		<!-- <div class="header-inner"> -->
		<nav class="navbar navbar-expand-xl mx-background-top-linear">
			<div class="container">
				<!-- <div class="logo my-auto h-100"> -->
				<a class="navbar-brand mb-3" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="logo"></a>
				<!-- <a class="navbar-brand" rel="nofollow" target="_blank" href="http://scadonsak.com/7bF" style="text-transform: uppercase;"> NUSASATU.COM</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
					</svg>
				</button>
				<!-- <div class="collapse navbar-collapse" id="navbarResponsive"> -->

				<div class="menu-area collapse navbar-collapse" id="navbarResponsive">
					<div class="navbar-collapse">
						<div class="nav-inner">
							<ul class="nav main-menu menu navbar-nav">
								<li><a class="h-100" href="#">VESTIDOS<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a>
								</li>
								<li><a class="h-100" href="#">BLUSAS<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a>
									<ul class="dropdown">
										<div class="row">
											<div class="col-xl-4">
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
											</div>
											<div class="col-xl-4">
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
											</div>
											<div class="col-xl-4">
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
												<li><a href="#">SUBCATEGORIA</a></li>
											</div>
										</div>
									</ul>
								</li>
								<li><a class="h-100" href="#">CALÇAS<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a></li>
								<li><a class="h-100" href="#">CAMISAS<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a></li>
								<li><a class="h-100" href="#">SHORTS<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a></li>
								<li><a class="h-100" href="#">SAIAS<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a></li>
								<li><a class="h-100" href="#">MACAQUINHO<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a>
								</li>
								<li><a class="h-100" href="#">PRAIA<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a></li>
								<li><a class="h-100 hot-sale" href="#">HOT SALE</a></li>
								<!-- search -->
								<div class="module widget-handle search-widget-handle d-flex align-items-center">
									<button class="search">
										<span class="title"><i>Busque</i></span>
										<i class="fa fa-search"></i>
									</button>
									<div class="function">
										<form role="search" method="get" id="searchform" class="search-form" action="#">
											<label class="screen-reader-text" for="s">Pesquisar:</label>
											<input type="text" placeholder="Faça a Busca do seu produto" value="" name="s" id="s">
											<button type="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
								<!-- <li class="d-flex">
									<form class="search-box" action="#" method="post" style="transform: scale(.5)">
										<input type="text" class="input" placeholder="Pesquisa" name="pesquisa">
										<button type="button" class="btn-search" name="button"></button>
									</form>
								</li> -->
								<!-- search -->
								<li>
									<a href="#" class="single-icon">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
											<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
										</svg>
									</a>
									<ul class="dropdown" style="
													width: 150px;
													margin: 0 0 0 -56px;
													text-align: center;
												">
										<li><a href="#">MINHA CONTA</a></li>
										<li><a href="#">MEUS PEDIDOS</a></li>
										<li><a href="#">CADASTRAR</a></li>
									</ul>
								</li>
								</li>
								<li>
									<a href="#" class="single-icon">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
											<path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
										</svg>
									</a>
									<ul class="dropdown" style="
													width: 150px;
													margin: 0 0 0 -56px;
													text-align: center;
												">
										<li><a href="#">MINHA CONTA</a></li>
										<li><a href="#">MEUS PEDIDOS</a></li>
										<li><a href="#">CADASTRAR</a></li>
									</ul>
								</li>
								<li style="background-color: #ff5959;">
									<a href="#" class="single-icon">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
											<path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z" />
										</svg>
										<span id="total-count"><?php echo sprintf(_n('%d', '%d', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<?php wp_head() ?>
	</header>
	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
