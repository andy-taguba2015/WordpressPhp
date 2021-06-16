<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Keto Bank</title>

		<meta name="keywords" content="_blank" />
		<meta name="description" content="Bank Site">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- From Bank Site Sample Main Blank Theme CSS -->


	<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/banksite/">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="25" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-anim-icon d-none d-md-block">
												<a class="nav-link" href="../banksite/contact"><i class="fas fa-angle-right"></i> Contact Us</a>
											</li>
											<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
												<span class="ws-nowrap"><i class="fas fa-phone"></i> (428) 733-8222</span>
											</li>
										</ul>
									</nav>
									<div class="header-nav-features">
										<!-- <div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div> -->
										<div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2">
												 <?php echo do_shortcode('[konnektive_cart_widget]');?>
										</div>
									</div>
								</div>


<!-- Start Header Menu -->
								<div class="header-row">
									<div class="header-nav pt-1">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                        <?php
                          $args = array(
                              'theme_location' => 'header-menu',
                              'container'      => 'nav',
                              'container-class' => 'collapse',
                              'menu_id'         => 'mainNav',
                              'menu_class'      => ' nav nav-pills'
                          );
                          wp_nav_menu($args);
                          ?>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
<!-- End Header Menu -->

							</div>
						</div>
					</div>
				</div>
			</header>
