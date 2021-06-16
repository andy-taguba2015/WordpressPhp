<?php get_header(); ?>
<?php
$ksdk = KonnektiveSDK::getInstance();
$ksdk->echoJavascript();

$offers = $ksdk->getOffers();
?>
			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li data-transition="fade">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/breadcrumb/beverage-close-up-diet-1920x672.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<div class="tp-caption tp-resizeme"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image"
								    data-x="right"
								    data-y="top"
								    data-width="['auto']"
								    data-height="['auto']"
								    data-basealign="slide"><img src="<?php echo get_stylesheet_directory_uri();?>/img/slides/" alt=""></div>

								<div class="tp-caption tp-resizeme"
									data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image"
								    data-x="left"
								    data-y="center"
								    data-width="['auto']"
								    data-height="['auto']"
								    data-basealign="slide"><img src="<?php echo get_stylesheet_directory_uri();?>/img/products/keto1.png" alt=""></div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7"
								    data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
								    data-type="image"
								    data-x="-500"
								    data-y="-700"
								    data-width="['auto']"
								    data-height="['auto']"
								    data-basealign="slide"><img src="<?php echo get_stylesheet_directory_uri();?>/img/slides/slide-parallax-porto-symbol.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">NEW WAY OF HEALTHY LIFESTYLE</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="<?php echo get_stylesheet_directory_uri();?>/img/slides/slide-blue-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="<?php echo get_stylesheet_directory_uri();?>/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">KETO RULES</div>

								<div class="tp-caption font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']"
									style="color: #fff;">Check out our options and features</div>

							</li>
						</ul>
					</div>
				</div>
 <!-- End Header Banner Slider -->
				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to get <span class="highlighted-word">Healthy</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="/banksite/" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
									<div class="learn-more">or <a href="/banksite/">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="container">

					<div class="row text-center pt-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Keto is </span>
								<span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span>guide of healthy lifestyle.</span>
							</h1>
							<!-- <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p> -->
						</div>
					</div>

				</div>

				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="home-concept mt-5">
						<div class="container">

							<div class="row text-center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-lg-2 ml-lg-auto">
									<div class="process-image">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/breadcrumb/Strategy 145x145.jpg" alt="" />
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image process-image-on-middle">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/breadcrumb/planning 145x145.jpg" alt="" />
										<strong>Planning</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/breadcrumb/build 145x145.jpg" alt="" />
										<strong>Build</strong>
									</div>
								</div>
								<div class="col-lg-4 ml-lg-auto">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/img/products/products1 338x338.png" alt="" /></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/img/products/product2 338x338.png" alt="" /></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/img/products/product3 338x338.png" alt="" /></a></li>
											</ul>
										</div>
										<strong class="our-work">Our Products</strong>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="container mb-5 pb-4">

					<div class="row">
						<div class="col mb-4">
							<hr class="my-5">
						</div>
					</div>

					<!--Featured Product Start-->

					<h1>OUR FEATURED PRODUCTS</h1>

					<section class="section border-0 my-0">
						<div class="container">

							<div class="row justify-content-center mb-5">

								<?php
								$camp = json_decode(get_option('konnek_campaign_data'));
								foreach($camp->offers as $offer)
								{
										$link = $offer->url;

										$post_meta = get_post_meta($offer->pageId);
										?>

								<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">

									<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
										<div class="thumb-info-wrapper">
											<a href="<?php echo $link;?>"><img src="<?php echo $offer->imagePath; ?>" class="img-fluid" alt=""></a>
											<div class="thumb-info-price bg-color-secondary font-weight-semibold">
												<span>£<?php echo '$'.$offer->price;?></span>
											</div>
										</div>
										<div class="thumb-info-caption">
											<h3 class="font-weight-semibold text-transform-none"><a href="<?php echo $link;?>"><?php echo $offer->name; ?></a></h3>
										</div>
										<div class="thumb-info-footer">
											<div class="pro-rating">
													<?php for($i=0;$i<$post_meta['product_ratings'][0];$i++): ?>
															<a href="#"><i class="zmdi zmdi-star"></i></a>
													<?php endfor;?>
											</div>
											<ul class="action-button">
													<li>
															<a href="<?php echo $link;?>" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
													</li>
													<li>
															<a href="" title="Add to cart" class="kcartAddToCartButton" id="product-qty-324-button" productId="<?php echo $offer->productId; ?>"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
													</li>
											</ul>
										</div>

									</div>
								</div>
								<?php } ?>

						</div>
					</section>

					<hr class="solid my-5">

					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Keto Health Challenges...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">MEET OUR CUSTOMERS.</h4>
						</div>
					</div>

<!-- Our Customers -->
					<div class="row text-center mt-5">
						<div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/NOVA_Master_CMYK_LOGO-330x73.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/SE_Health_Logo-330x73.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/Medmarc-logo-330x73.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/Medxcel-330x73.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/HH_logo_web_crop-330x73.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/Wellmo_logo-330x73.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/logos/vitality-logo-330x73.png" alt="">
							</div>

						</div>
					</div>

				</div>
<!-- Our Customers End -->
			</div>

	<?php get_footer(); ?>
