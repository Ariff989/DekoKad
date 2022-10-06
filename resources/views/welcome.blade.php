<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DekoKad - Digital Invite</title>
        <link rel="shortcut icon" href="{{ asset('images/jaetech.jpeg') }}">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('revslider/css/rs6.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/typography.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/vizion-style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@800,500,100,700,400,300,200,900&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <!-- loading -->
		<div id="loader">
			<div id="loading-center">
				<div class="loader">
					<div class="spinner"></div>
					<img class="loading-img" src="{{ asset('images/logo-dekokad.jpeg') }}" alt="loder">
				</div>
			</div>
		</div>
		<!-- loading End -->

        <!-- Header -->
		<header id="main-header" class="header-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.html">
								<img class="img-fluid" src="{{ asset('images/logo-dekokad1.jpeg') }}" alt="img">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="menu-btn d-inline-block" id="menu-btn">
									<span class="line"></span>
								<span class="line"></span>
								<span class="line"></span>
								</span>
								<span class="ion-navicon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto w-100 justify-content-end">
									<li class="nav-item ">
										<a class="nav-link  active" href="index.html">Home</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Pages
											</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="about-us.html">About US</a>
											<a class="dropdown-item" href="services.html">Services</a>
											<a class="dropdown-item" href="pricing.html">Pricing Plan</a>
											<a class="dropdown-item" href="feedback.html">Feedback</a>
											<a class="dropdown-item" href="team.html">Team</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Portfolio
											</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
											<a class="dropdown-item" href="portfolio-2-column.html">Portfolio 2 Columns</a>
											<a class="dropdown-item" href="portfolio-3-column.html">Portfolio 3 Columns</a>
											<a class="dropdown-item" href="portfolio-4-column.html">Portfolio 4 Columns</a>
											<a class="dropdown-item" href="portfolio-details.html">Portfolio Details</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Blog
											</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
											<a class="dropdown-item" href="blog.html">Blog</a>
											<a class="dropdown-item" href="blog-details.html">Blog Details</a>
											<a class="dropdown-item" href="one-column-blog.html">One column blog</a>
											<a class="dropdown-item" href="two-column-blog.html">Two column blog</a>
											<a class="dropdown-item" href="three-column-blog.html">Three column blog</a>
											<a class="dropdown-item" href="left-sidebar-grid.html">Left sidebar grid</a>
											<a class="dropdown-item" href="right-sidebar-grid.html">Right sidebar grid</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact-us.html">Contact US</a>
									</li>
								</ul>
							</div>
							<div class="sub-main">
								<ul class="shop_list">
									<li class="search-btn list-inline-item">
										<div class="search-box">
											<form method="get" class="search-form" action="#">
												<label for="search-form">
													<span class="screen-reader-text">Search for:</span>
												</label>
												<input type="search" id="search-form" class="search-field" placeholder="Search" value="" name="s">
												<button type="submit" class="search-submit"><i class="fa fa-search"></i><span class="screen-reader-text">Search</span></button>
											</form>
										</div>
									</li>
									<li class="cart-btn list-inline-item">
										<div class="cart_count">
											<a class="parents mini-cart-count" href="javascript:void(0)">
												<i class="fa fa-shopping-cart"></i>
												<div id="mini-cart-count">
													0
												</div>
											</a>
										</div>
									</li>
									<li class="button-btn list-inline-item">
										<nav aria-label="breadcrumb">
											<div class="blue-btn button"><a href="#">Get Started</a></div>
										</nav>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->

          
        
		<p class="rs-p-wp-fix"></p>
		<rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="Ecommerce-AI" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
			<rs-module id="rev_slider_2_1" style="display:none;" data-version="6.2.2">
				<rs-slides>
					<rs-slide data-key="rs-3" id="iq-home" data-title="Slide" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:0;">
						<img src="revslider/assets/green.png" alt="img" title="Untitled-11.png" width="1600" height="851" data-parallax="off" class="rev-slidebg" data-no-retina>
						<!--
						-->
						<h1
						id="slider-2-slide-3-layer-2"
						class="rs-layer"
						data-type="text"
						data-color="#1f2430"
						data-rsp_ch="on"
						data-xy="x:c;y:189px;"
						data-text="w:bold;s:80;l:80;"
						data-frame_0="y:-50;"
						data-frame_1="st:1000;sp:1000;sR:1000;"
						data-frame_999="o:0;st:w;sR:7000;"
						style="z-index:6;font-family: 'Cabinet Grotesk', sans-serif;font-weight: 700;"
						>Kad Digital Paling Comel Abad-21
						</h1><!--
						--><rs-layer
						id="slider-2-slide-3-layer-3"
						data-type="text"
						data-color="#6a7683"
						data-rsp_ch="on"
						data-xy="x:c;y:c;yo:-199px;"
						data-text="w:normal;s:18;l:30;a: center;"
						data-frame_0="y:-50;"
						data-frame_1="st:600;sp:1000;sR:600;"
						data-frame_999="o:0;st:w;sR:7400;"
						style="z-index:7;font-family: 'Cabinet Grotesk', sans-serif;display:block;"
						>Design je sekarang even majlis tak confirm lagi. Esok-esok boleh tukar lagi.
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-4"
						class="rs-pxl-2"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:c;y:c;yo:180px;"
						data-text="w:normal;"
						data-dim="w:813px;h:599px;"
						data-frame_0="sX:0.8;sY:0.8;"
						data-frame_1="e:power4.out;st:1600;sp:1000;sR:1600;"
						data-frame_999="o:0;st:w;sR:6400;"
						style="z-index:8;"
						><img src="revslider/assets/banner-1-1.png" alt="img" width="813" height="599" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-5"
						class="rs-pxl-6"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:191px;y:323px;"
						data-text="w:normal;"
						data-dim="w:349px;h:348px;"
						data-frame_0="sX:0.8;sY:0.8;"
						data-frame_1="e:power4.out;st:1600;sp:1000;sR:1600;"
						data-frame_999="o:0;st:w;sR:6400;"
						style="z-index:9;"
						><img src="revslider/assets/offer.png" alt="img" width="349" height="348" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-6"
						class="rs-pxl-6"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:1057px;y:516px;"
						data-text="w:normal;"
						data-dim="w:328px;h:378px;"
						data-frame_0="sX:0.8;sY:0.8;"
						data-frame_1="e:power4.out;st:1600;sp:1000;sR:1600;"
						data-frame_999="o:0;st:w;sR:6400;"
						style="z-index:10;"
						><img src="revslider/assets/3.png" alt="img" width="328" height="378" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-7"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:711px;y:b;yo:12px;"
						data-text="w:normal;"
						data-dim="w:142px;h:141px;"
						data-frame_0="sX:0.8;sY:0.8;"
						data-frame_1="e:power4.out;st:2300;sp:1000;sR:2300;"
						data-frame_999="o:0;st:w;sR:5700;"
						style="z-index:11;"
						><img src="revslider/assets/pen-1.png" alt="img" width="142" height="141" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-8"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:c;xo:76px;y:b;yo:12px;"
						data-text="w:normal;"
						data-dim="w:142px;h:141px;"
						data-frame_0="sX:0.8;sY:0.8;"
						data-frame_1="e:power4.out;st:2300;sp:1000;sR:2300;"
						data-frame_999="o:0;st:w;sR:5700;"
						style="z-index:12;"
						><img src="revslider/assets/p3.png" alt="img" width="142" height="141" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-9"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:c;xo:167px;y:b;yo:12px;"
						data-text="w:normal;"
						data-dim="w:142px;h:141px;"
						data-frame_0="sX:0.8;sY:0.8;"
						data-frame_1="e:power4.out;st:2300;sp:1000;sR:2300;"
						data-frame_999="o:0;st:w;sR:5700;"
						style="z-index:13;"
						><img src="revslider/assets/p2.png" alt="img" width="142" height="141" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-10"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:c;xo:447px;y:c;yo:-24px;"
						data-text="w:normal;"
						data-dim="w:70px;h:72px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:3000;sp:1000;sR:3000;"
						data-frame_999="o:0;st:w;sR:5000;"
						style="z-index:14;"
						><img src="revslider/assets/banner-8.png" alt="img" width="70" height="72" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-11"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:284px;y:b;yo:258px;"
						data-text="w:normal;"
						data-dim="w:44px;h:49px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:3000;sp:1000;sR:3000;"
						data-frame_999="o:0;st:w;sR:5000;"
						style="z-index:15;"
						><img src="revslider/assets/banner-7.png" alt="img" width="44" height="49" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-12"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:c;xo:352px;y:c;yo:-88px;"
						data-text="w:normal;"
						data-dim="w:62px;h:62px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:3000;sp:1000;sR:3000;"
						data-frame_999="o:0;st:w;sR:5000;"
						style="z-index:16;"
						><img src="revslider/assets/banner-circle.png" alt="img" width="62" height="62" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-13"
						class="rs-pxl-6"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:190px;y:b;yo:324px;"
						data-text="w:normal;"
						data-dim="w:62px;h:62px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:3000;sp:1000;sR:3000;"
						data-frame_999="o:0;st:w;sR:5000;"
						style="z-index:16;"
						><img src="revslider/assets/banner-circle.png" alt="img" width="62" height="62" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-14"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:c;xo:539px;y:c;yo:62px;"
						data-text="w:normal;"
						data-dim="w:62px;h:62px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:3000;sp:1000;sR:3000;"
						data-frame_999="o:0;st:w;sR:5000;"
						style="z-index:16;"
						><img src="revslider/assets/banner-circle.png" alt="img" width="62" height="62" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-15"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="x:r;y:100px;"
						data-text="w:normal;"
						data-dim="w:176px;h:264px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:520;sp:1000;sR:520;"
						data-frame_999="o:0;st:w;sR:7480;"
						style="z-index:17;"
						><img src="revslider/assets/banner-shape-1.png" alt="img" width="176" height="264" data-no-retina>
						</rs-layer><!--
						--><rs-layer
						id="slider-2-slide-3-layer-16"
						class="rs-pxl-3"
						data-type="image"
						data-rsp_ch="on"
						data-xy="y:189px;"
						data-text="w:normal;"
						data-dim="w:154px;h:309px;"
						data-frame_0="sX:0.9;sY:0.9;"
						data-frame_1="st:540;sp:1000;sR:540;"
						data-frame_999="o:0;st:w;sR:7460;"
						style="z-index:18;"
						><img src="revslider/assets/banner-shape-2.png" alt="img" width="154" height="309" data-no-retina>
						</rs-layer><!---->						
					</rs-slide>
				</rs-slides>
				<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
			</rs-module>
			<script>
			if(typeof revslider_showDoubleJqueryError === "undefined") {
				function revslider_showDoubleJqueryError(sliderID) {
					var err = "<div class='rs_error_message_box'>";
									err += "<div class='rs_error_message_oops'>Oops...</div>";
									err += "<div class='rs_error_message_content'>";
													err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
													err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
													err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
									err += "</div>";
				err += "</div>";
					jQuery(sliderID).show().html(err);
				}
			}
			</script>
		</rs-module-wrap>
		<!-- END REVOLUTION SLIDER -->

        <!-- Main Content -->
		<div class="main-content pt-5">
			<section class="pb-0" id="iq-about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<div class="title-box text-center"><h2 class="title mb-2  font-weight-bold">DekoKad E-Card Digital Invitation</h2>
								<p class="sub-title">If you are planning on developing a product landing app or website, take a look at this beautiful-crafted and<br>
								error-free WordPress theme.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="iq-ecom-circle-style purple-hover text-center wow fadeInUp" data-wow-duration="0.9s">
								<div class="dot-circle">
									<div class="effect-circle"></div>
									<div class="main-circle">
										<div class="circle-bg">
											<i class="flaticon flaticon-calendar-1"></i>
										</div>
									</div>
								</div>
								<h5>Smart Banners</h5><span>The passage is attributed to an a product typesetter in the 15th century who is thought to have .</span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="iq-ecom-circle-style org-hover text-center wow fadeInUp" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.9s; animation-name: fadeInUp;">
								<div class="dot-circle">
									<div class="effect-circle"></div>
									<div class="main-circle">
										<div class="circle-bg">
											<i class="flaticon flaticon-browser-2"></i>
										</div>
									</div>
								</div>
								<h5>Smart Pages</h5><span>Attributed to an unknown typesetter the passage is in the 15th century who is thought to have .</span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="iq-ecom-circle-style green-hover text-center wow fadeInUp" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.9s; animation-name: fadeInUp;">
								<div class="dot-circle">
									<div class="effect-circle"></div>
									<div class="main-circle">
										<div class="circle-bg">
											<i class="flaticon flaticon-search-1"></i>
										</div>
									</div>
								</div>
								<h5>Easy to Customize</h5><span>Passage is in the 15th century who landing is thought to have attributed to an unknown typesetter</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="pb-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="title-box">
								<h2>DekoKad Popular Features</h2>
								<p>Buid blower I don’t want no agro bleeding chimney pot <br> burke tosser cras nice one boot fanny.!</p>
							</div>
						</div>
						<div class="col-lg-6 vizion-right-img">
							<img src="images/01.png" class="img-fluid"  alt="img">
						</div>
						<div class="col-lg-6">
							<div class=" verticle-slider ">

					<div class="feedback-info ">
					<div class="hover_content" style="background:#0077ff;"></div>
						    <div class="slick-icon" style="background: #fef0ef;">
						        <i class="flaticon flaticon-tools" style="color: #0077ff;"></i>
						    </div>
					    <div class="slick-text">
						    <h5 class="iq_vslider_title-misc animate">AI Widgets</h5>
						    <p class="iq_vslider_title-misc animate mb-0">There are many variations of passages of Lorem Ipsum available, in</p>
						</div>
					</div>
					<div class="feedback-info ">
					<div class="hover_content" style="background:#f04e5b;"></div>
						    <div class="slick-icon" style="background: #fef0ef;">
						        <i class="flaticon flaticon-vector" style="color: #f04e5b;"></i>
						    </div>
					    <div class="slick-text">
						    <h5 class="iq_vslider_title-misc animate">Visual Editor</h5>
						    <p class="iq_vslider_title-misc animate mb-0">There are many variations of passages of Lorem Ipsum available, in</p>
						</div>
					</div>
					<div class="feedback-info ">
					<div class="hover_content" style="background:#02f7d2;"></div>
						    <div class="slick-icon" style="background: #fef0ef;">
						        <i class="flaticon flaticon-search" style="color: #02f7d2;"></i>
						    </div>
					    <div class="slick-text">
						    <h5 class="iq_vslider_title-misc animate">Theme Detection</h5>
						    <p class="iq_vslider_title-misc animate mb-0">There are many variations of passages of Lorem Ipsum available, in</p>
						</div>
					</div>

		</div>
						</div>
					</div>
				</div>
			</section>
			<section class="blue-light-bg ">
                <div class="container">
                    <div class="row iq-circle-progress">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2> DekoKad Popular Features</h2>
                                <p>Way better ROI than traditional marketing tools and chatbots.</p>
                            </div>
                        </div>
                                        <div class="col-lg-3">
                                            <div class="progressbar-circle" data-animate="false">
                                                <div class="circle purple-hover" data-percent="65">
                                                    <div>65%</div>
                                                    <p class="mt-3 mb-0 font-c iq-fw-6 text-black">Uplift in Conversion</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="progressbar-circle" data-animate="false">
                                                <div class="circle org-hover" data-percent="85">
                                                    <div>85%</div>
                                                    <p class="mt-3 mb-0 font-c iq-fw-6 text-black">Uplift in average revenue shopper</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="progressbar-circle" data-animate="false">
                                                <div class="circle green-hover" data-percent="90">
                                                    <div>90%</div>
                                                    <p class="mt-3 mb-0 font-c iq-fw-6 text-black">Savings of promotion spend</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="progressbar-circle" data-animate="false">
                                                <div class="circle purple-hover" data-percent="50">
                                                    <div>50%</div>
                                                    <p class="mt-3 mb-0 font-c iq-fw-6 text-black">Suprior Speed Performance</p>
                                                </div>
                                            </div>
                                        </div>



                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2>How it's Work</h2>
                                <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot<br>  burke tosser cras nice one boot fanny.!</p>
                            </div>
                        </div>
                            <div class="col-lg-4">
                                <div class="iq-ecom-fancybox wow fadeInUp text-center" data-wow-duration="0.9s">
                                    <div class="iq-ecomicon" style="background: #e7eaf9;">
                                        <i class="flaticon flaticon-money" style="color: #643bdf;"></i>
                                    </div>
                                    <div class="iq-ecom-info">
                                        <h5 class="mb-2">Define Your product</h5>
                                    </div>
                                    <div class="iq-ecom-patimg">
                                        <div class="pimage"><img src="images/14.png" alt="fancybox"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="iq-ecom-fancybox wow fadeInUp text-center" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.9s; animation-name: fadeInUp;">
                                    <div class="iq-ecomicon" style="background: #fff0ee;">
                                        <i class="flaticon flaticon-analytics" style="color: #ff5949;"></i>
                                    </div>
                                    <div class="iq-ecom-info">
                                        <h5 class="mb-2">Analyze fresh competitor</h5>
                                    </div>
                                    <div class="iq-ecom-patimg">
                                        <div class="pimage"><img src="images/14.png" alt="fancybox"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="iq-ecom-fancybox wow fadeInUp text-center" data-wow-duration="0.9s" style="visibility: visible; animation-duration: 0.9s; animation-name: fadeInUp;">
                                    <div class="iq-ecomicon" style="background: #e8f9f3;">
                                        <i class="flaticon flaticon-sale" style="color: #54d3b7;"></i>
                                    </div>
                                    <div class="iq-ecom-info">
                                        <h5 class="mb-2">Maximize Profits</h5>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <section class="light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feedback-ecommerce">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class="mb-3">How Clients React</h2>
                                        <div class="tab-pane" id="home-0">
                                            <div class="feedback-ecommerce-info">
                                                <h4 class=" car-name mb-3 pt-5"><strong>Alex xander-</strong><span>Web Designer</span>
                                                </h4>
                                                <div class="fb-description">
                                                    <p class="title">Faff about only bleeding chimney pot burke tosser cras a quid blower I don’t want no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane  active show" id="home-1">
                                            <div class="feedback-ecommerce-info">
                                                <h4 class=" car-name mb-3 pt-5"><strong>Ethel A. Williamson-</strong><span>CEO</span>
                                                </h4>
                                                <div class="fb-description">
                                                    <p class="title">I don’t want only bleeding chimney pot burke tosser cras a quid blower no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="home-2">
                                            <div class="feedback-ecommerce-info">
                                                <h4 class=" car-name mb-3 pt-5"><strong>John Deo-</strong><span>Web Developer</span>
                                                </h4>
                                                <div class="fb-description">
                                                    <p class="title">I don’t want only bleeding chimney pot burke tosser cras a quid blower no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="home-3">
                                            <div class="feedback-ecommerce-info">
                                                <h4 class=" car-name mb-3 pt-5"><strong>Markey Anim-</strong><span>Tester, Coder</span>
                                                </h4>
                                                <div class="fb-description">
                                                    <p class="title">I don’t want only bleeding chimney pot burke tosser cras a quid blower no agro bleeding chimney pot burke</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="home-4">
                                            <div class="feedback-ecommerce-info">
                                                <h4 class=" car-name mb-3 pt-5"><strong>Kips Leo-</strong><span>Web Designer</span>
                                                </h4>
                                                <div class="fb-description">
                                                    <p class="title">Faff about only bleeding chimney pot burke tosser cras a quid blower I don’t want no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 feedback_ecommerce_images">
                                        <ul class="nav nav-pills tabs-left justify-content-center" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="0-tab" data-toggle="tab" href="#home-0" role="tab"  aria-selected="false">
                                                    <div class="image-box">
                                                        <img class="img-fluid" src="images/02.png" alt="image">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  active show" id="1-tab" data-toggle="tab" href="#home-1" role="tab"  aria-selected="true">
                                                    <div class="image-box">
                                                        <img class="img-fluid" src="images/03.png" alt="image">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="2-tab" data-toggle="tab" href="#home-2" role="tab"  aria-selected="false">
                                                    <div class="image-box">
                                                        <img class="img-fluid" src="images/04.png" alt="image">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="3-tab" data-toggle="tab" href="#home-3" role="tab"  aria-selected="false">
                                                    <div class="image-box">
                                                        <img class="img-fluid" src="images/05.png" alt="image">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  show" id="4-tab" data-toggle="tab" href="#home-4" role="tab"  aria-selected="false">
                                                    <div class="image-box">
                                                        <img class="img-fluid" src="images/02.png" alt="image">
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2>Our Pricing</h2>
                                <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot<br>  burke tosser cras nice one boot fanny.!</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-ecom-box text-left wow slideInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                <div class="price-head mt-2 mb-2">
                                    <h5 class="iq_pp_title">Free & Basic Plan</h5>
                                    <p class="iq_pp_subtitle">It is a long established fact that a reader distracted.</p>
                                </div>
                                <div class="price-blog pt-4 pb-4 main-bg">
                                    <div class="price">
                                        <span class="currency">$</span>
                                        <strong>0/</strong>
                                        <span class="month">Month</span><a class="button grey" href="#" role="button">Get Started</a>
                                    </div>
                                </div>
                                <div class="listing">
                                    <ul>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Feedback System
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Social integration
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Push Notifications
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Reveant App Content
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Log-in-via Social Media
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-ecom-box text-left wow slideInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                <div class="price-head mt-2 mb-2">
                                    <h5 class="iq_pp_title">Advanced Plans</h5>
                                    <p class="iq_pp_subtitle">Established fact that t is a long reader will be distracted.</p>
                                </div>
                                <div class="price-blog pt-4 pb-4 main-bg">
                                    <div class="price">
                                        <span class="currency">$</span>
                                        <strong>35/</strong>
                                        <span class="month">Month</span><a class="button grey" href="#" role="button">Get Started</a>
                                    </div>
                                </div>
                                <div class="listing">
                                    <ul>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Log-in-via Social Media
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Reveant App Content
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Social integration
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Feedback System
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Push Notifications
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-ecom-box text-left wow slideInUp" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                <div class="price-head mt-2 mb-2">
                                    <h5 class="iq_pp_title">Team Member Plans</h5>
                                    <p class="iq_pp_subtitle">Reader will be distracted It is a long established fact that.</p>
                                </div>
                                <div class="price-blog pt-4 pb-4 main-bg">
                                    <div class="price">
                                        <span class="currency">$</span>
                                        <strong>70/</strong>
                                        <span class="month">Month</span><a class="button grey" href="#" role="button">Get Started</a>
                                    </div>
                                </div>
                                <div class="listing">
                                    <ul>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Reveant App Content
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Log-in-via Social Media
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Feedback System
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Social integration
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check pp-check"></i>
                                            <span class="time-of-year">
                                                Push Notifications
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="6" data-items-laptop="6" data-items-tab="4" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30" >
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/06.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/07.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/08.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/09.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/10.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/06.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/07.png" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="images/08.png" alt="image1">
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2>Latest News in DekoKad for eCommerce</h2>
                                <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot<br>  burke tosser cras nice one boot fanny.!</p>
                            </div>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" >
                                <div class="item">
                                    <div class="iq-blog-box">
                                        <div class="iq-blog-image clearfix">
                                            <img src="images/11.jpeg" class="img-fluid center-block" alt="blogimage1">
                                        </div>
                                        <div class="iq-blog-detail">
                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                                        <a href="#" rel="bookmark">November 22, 2019</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-title">
                                                <a href="#">
                                                    <h6>Beautiful product</h6>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <p>Printer Ipsum has been the industry standard dummy text ever since this beautiful-crafted.</p>
                                            </div>
                                            <div class="blog-button"><a class="button" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="item">
                                    <div class="iq-blog-box">
                                        <div class="iq-blog-image clearfix">
                                            <img src="images/12.jpeg" class="img-fluid center-block" alt="blogimage1">
                                        </div>
                                        <div class="iq-blog-detail">
                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                                        <a href="#" rel="bookmark">November 22, 2019</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-title">
                                                <a href="#">
                                                    <h6>Beautiful product</h6>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <p>Printer Ipsum has been the industry standard dummy text ever since this beautiful-crafted.</p>
                                            </div>
                                            <div class="blog-button"><a class="button" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="item">
                                    <div class="iq-blog-box">
                                        <div class="iq-blog-image clearfix">
                                            <img src="images/13.jpeg" class="img-fluid center-block" alt="blogimage1">
                                        </div>
                                        <div class="iq-blog-detail">
                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                                        <a href="#" rel="bookmark">November 22, 2019</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-title">
                                                <a href="#">
                                                    <h6>Beautiful product</h6>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <p>Printer Ipsum has been the industry standard dummy text ever since this beautiful-crafted.</p>
                                            </div>
                                            <div class="blog-button"><a class="button" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="item">
                                    <div class="iq-blog-box">
                                        <div class="iq-blog-image clearfix">
                                            <img src="images/11.jpeg" class="img-fluid center-block" alt="blogimage1">
                                        </div>
                                        <div class="iq-blog-detail">
                                            <div class="iq-blog-meta">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                                        <a href="#" rel="bookmark">November 22, 2019</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-title">
                                                <a href="#">
                                                    <h6>Beautiful product</h6>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <p>Printer Ipsum has been the industry standard dummy text ever since this beautiful-crafted.</p>
                                            </div>
                                            <div class="blog-button"><a class="button" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

		</div>
		<!-- Main Content END -->
		<!-- Footer Start -->
		<footer  class="position-relative blue-light-bg" id="iq-contact">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6  iq-rmb-50">
							<div class="footer-logo">
								<a href="index.html">
                                    {{-- <img class="img-fluid mb-3" src="{{ asset('images/logo-dekokad.jpeg') }}" alt="img"> --}}
                                </a>
								<div class="mt-2">It is a long established fact that a reader will be distracted by the readable content.</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0">
							<h5 class="mb-4 font-weight-bold">Menu</h5>
							<ul class="menu p-0">
								<li><a href="javascript:void(0)">About Us</a></li>
								<li><a href="javascript:void(0)">Theme</a></li>
								<li><a href="javascript:void(0)">Features</a></li>
								<li><a href="javascript:void(0)">Pricing</a></li>
								<li><a href="javascript:void(0)">Blog</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
							<h5 class="mb-4 font-weight-bold">About Us</h5>
							<ul class="menu p-0">
								<li><a href="javascript:void(0)">About Vizion</a></li>
								<li><a href="javascript:void(0)">Roadmap</a></li>
								<li><a href="javascript:void(0)">How it Work</a></li>
								<li><a href="javascript:void(0)">Team</a></li>
								<li><a href="javascript:void(0)">News</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
							<h5 class="mb-4 font-weight-bold">Quick Links</h5>
							<ul class="menu p-0">
								<li><a href="javascript:void(0)">About Us</a></li>
								<li><a href="javascript:void(0)">Theme</a></li>
								<li><a href="javascript:void(0)">Features</a></li>
								<li><a href="javascript:void(0)">Pricing</a></li>
								<li><a href="javascript:void(0)">Blog</a></li>
							</ul>
						</div>
					</div>
					<hr class="pt-5">
					<div class="pt-3 pb-3">
						<div class="row justify-content-between text-center">
							<div class="col-auto mr-auto"> 				<span class="copyright">Copyright 2019 vizion All Rights Reserved.</span>
						</div>
						<div class="col-auto">
							<div class="social-icone">
								<ul>
									<li class="d-inline"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									<li class="d-inline"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li class="d-inline"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
									<li class="d-inline"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- back-to-top -->
		<div id="back-to-top" style="">
			<a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
		</div>
		<!-- back-to-top End -->
		</footer>
		<!-- Footer End -->

        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/appear.js') }}"></script>
        <script src="{{ asset('js/circle-progress.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/vizion-custom.js') }}"></script>
        <script src="{{ asset('js/skrollr.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

	    <!-- REVOLUTION JS FILES -->
        <script src="{{ asset('js/rev-jquery.js') }}"></script>
        <script src="{{ asset('revslider/js/revolution.tools.min.js') }}"></script>
        <script src="{{ asset('revslider/js/rs6.min.js') }}"></script>
        <script>
            function setREVStartSize(e){
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
                    e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                    if(e.layout==="fullscreen" || e.l==="fullscreen")
                        newh = Math.max(e.mh,window.innerHeight);
                    else{
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                        e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                        var nl = new Array(e.rl.length),
                            ix = 0,
                            sl;
                        e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                        for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                        var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                        newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
                    }
                    if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                    document.getElementById(e.c).height = newh;
                    window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
                } catch(e){
                    console.log("Failure at Presize of Slider:" + e)
                }
            };
        </script>
        <script>			
            var	revapi2,
            tpj;
            jQuery(function() {
                tpj = jQuery;
                if(tpj("#rev_slider_2_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_2_1");
                }else{
                    revapi2 = tpj("#rev_slider_2_1").show().revolution({
                        sliderType:"hero",
                        jsFileLocation:"js/",
                        sliderLayout:"fullwidth",
                        visibilityLevels:"1240,1024,778,480",
                        gridwidth:1600,
                        gridheight:1000,
                        spinner:"spinner0",
                        editorheight:"1000,768,960,720",
                        responsiveLevels:"1240,1024,778,480",
                        disableProgressBar:"on",
                        navigation: {
                            onHoverStop:false
                        },
                        parallax: {
                            levels:[1,2,3,4,5,6,7,8,9,10,11,12,13,50,51,30],
                            type:"mouse",
                            origo:"slideCenter",
                            speed:0
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid:true
                        },
                    });
                }
            });
        </script>

    </body>
</html>
