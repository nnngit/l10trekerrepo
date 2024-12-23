<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Treker - Home 01</title>
<!-- Stylesheets -->
<link href="web/css/bootstrap.css" rel="stylesheet">
<link href="web/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo e(asset('web/images/favicon.png')); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo e(asset('web/images/favicon.png')); ?>" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo e(asset('web/css/responsive.css')); ?>" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--> 

<!--<link rel="stylesheet" href="<?php echo e(asset('web/css/bootstrap.css')); ?>">  
<link href="<?php echo e(asset('web/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('web/css/responsive.css')); ?>" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
  
</head>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <div class="preloader"></div> 
	
    <div class="search-backdrop"></div>
	
    <!-- Main Header-->
    <header class="main-header">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left clearfix">
                        <ul class="info clearfix">
                            <li><i class="icon fa fa-envelope"></i> <a href="mailto:INFO@TREKER.COM">INFO@TREKER.COM</a></li>
                            <li><i class="icon fa fa-phone-circle"></i> <a href="tel:+11256326501">+11 256 3265 01</a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <div class="lang-box">
                            <div class="lang-btn clearfix"><span class="img far fa-globe-americas"></span><span class="txt">Eng</span><span class="icon far fa-angle-down"></span></div>
                            <ul class="lang-list">
                                <li><a href="#">Tur</a></li>
                                <li><a href="#">Esp</a></li>
                                <li><a href="#">Rus</a></li>
                            </ul>
                        </div>
                        <div class="login"><i class="icon fa fa-user"></i> <a href="login">SIGN IN</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->
        <div class="header-upper">        
            <div class="auto-container">
                <!-- Main Box -->
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                         <div class="logo"><a href="index.html" title="Treker"><img src="web/images/logo.svg" alt="" title="Treker"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>
                                        <ul>
								 		
                                             <li><a href="ditto.html">Lorem ipsum</a></li>
                                             <li><a href="index.html">Home 01</a></li>
                                             <li><a href="index-2.html">Home 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="about.html">About</a>
                                        <ul>
										    <li><a href="ditto.html">Lorem ipsum</a></li>
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="team-member.html">Team Member</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
																	
									
                                    <li><a href="listy">Destns</a></li>
                                    <li><a href="tlisty">Tour PKGS</a></li>
                                    						                               
                                    <li><a href="contact.html">Contact</a></li>
									
									<li class="dropdown"><a href="/blisty">Bookings</a>                              </li>
									
									<li class="dropdown"><a href="login">Loginreg</a>                         </li>
									
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->

                        <div class="links-box clearfix">
                            <div class="link search-btn search-toggle"><span class="icon far fa-search"></span></div>
                            <div class="link fav-btn"><a href="#"><span class="icon far fa-heart"></span><span class="count">02</span></a></div>
                            <div class="link cart-btn"><a href="#" class="clearfix"><div class="cart-info"><span class="icon far fa-shopping-cart"></span>00 Items</div><div class="amount">$ 00:00</div></a></div>
                        </div>

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener"><span class="icon"><img src="web/images/icons/menu-icon.svg" alt=""></span></button>
                        </div>

                    </div>

                    <!-- End Header Upper -->
                    <div class="search-box">
                        <div class="outer-container">
                            <div class="inner-box">
                                <div class="form-box">
                                    <div class="s-close-btn"><span class="icon far fa-times"></span></div>
                                    <span class="s-icon fa fa-search"></span>
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" value="" placeholder="Search Here" required="">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->

    <!--Search Backdrop-->
    <div class="search-backdrop"></div>
		
    <!-- Menu Backdrop -->
    <div class="menu-backdrop"></div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar">
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation" viewBox="0 0 16 14"><path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path></svg></span></div>
            <div class="nav-logo-box">
                <div class="logo"><a href="index.html" title="Treker"><img src="web/images/logo.svg" alt="" title="Treker"></a></div>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                 <ul class="navigation clearfix">
                    <li class="current dropdown"><a href="index.html">Home</a>
                        <ul>
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="about.html">About Us</a>
                        <ul>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="team-member.html">Team Member</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="shop.html">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            <li><a href="product-single.html">Product Details</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="reset-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="destinations.html">Destinations</a></li>
                    <li><a href="trekking.html">Trekking</a></li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul>
                            <li><a href="activities.html">Activities</a></li>
                            <li><a href="destinations-2.html">Destinations 02</a></li>
                            <li><a href="tours.html">Tours</a></li>
                            <li><a href="packages.html">Packages 01</a></li>
                            <li><a href="packages-2.html">Packages 02</a></li>
                            <li><a href="booking.html">Booking</a></li>
                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a href="error-page.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="blog.html">News</a>
                        <ul>
                            <li><a href="blog.html">Our Blog</a></li>
                            <li><a href="blog-2.html">Blog Classic</a></li>
                            <li><a href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->
            
            <div class="links-box clearfix">
                <div class="clearfix">
                    <div class="link"><a href="login.html" class="theme-btn btn-style-one"><span>Login<i class="icon far fa-angle-right"></i></span></a></div>
                    <div class="link"><a href="signup.html" class="theme-btn btn-style-two"><span>Sign Up<i class="icon far fa-angle-right"></i></span></a></div>
                </div>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->

	<div class="cart-backdrop"></div>
	
    <!--Cart Sidebar-->
    <div class="cart-sidebar">
        <div class="cart-side-inner">
            <div class="cart-side-header">
                <div class="closer-btn"><span>Close</span></div>
                <h5>Shopping Cart</h5>
            </div>
            <div class="prod-box">
                <div class="prod-block">
                    <div class="prod-inner">
                        <div class="prod-thumb"><a href="#"><img src="web/images/resource/shop/shop-thumb-1.jpg" alt=""></a></div>
                        <div class="remove-item"><a href="#"><i class="far fa-times"></i></a></div>
                        <div class="prod-title"><a href="#">Smart Air Bag Travel</a></div>
                        <div class="quantity-box">
                            <div class="item-quantity">
                                <input class="qty-spinner" type="text" value="1" name="quantity">
                            </div>
                        </div>
                        <div class="calculations">1 x <span>$225.00</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-content">
            <div class="count clearfix">
                <span class="ttl">Subtotal</span>
                <span class="dtl">$225.00</span>
            </div>
            <div class="links clearfix">
                <div class="left"><a href="#" class="theme-btn btn-style-one"><span>View Cart</span></a></div>
                <div class="right"><a href="#" class="theme-btn btn-style-two"><span>Checkout</span></a></div>
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    <section class="banner-section">
        
        <div class="banner-container">
            <div class="banner-slider-box">
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="auto-container">
                      <div class="content-box">
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <div class="bg-image"><img src="web/images/main-slider/banner-bg-text.svg" alt="" title=""></div>
                                        <h2>Never Stop</h2>
                                        <h1><span>Exploring</span></h1>
                                        <div class="text">Their house is a museum where people come to see ‘em. They really are a scream the Addams Family. These days are all Happy and Free. These days are all share them with me oh baby.</div>
                                        <div class="links-box clearfix">
                                            <div class="link"><a href="#" class="theme-btn btn-style-one"><span>View All Tours<i class="icon"><img src="web/images/icons/logo-icon.svg" alt="" title=""></i></span></a></div>
                                            <div class="link"><a href="https://www.youtube.com/watch?v=0xhr0j877bI" class="theme-btn lightbox-image"><i class="ripple"></i><span class="icon"><img src="web/images/icons/video-icon-1.svg" alt="" title=""></span></a></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="banner-image">
                                <div class="image"><img src="web/images/main-slider/banner-image-1.svg" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Us Section-->
    <section class="about-us">
        <div class="floated-icon right"><img src="web/images/resource/about-stone-right.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <div class="subtitle">About Treker</div>
                            <h2><i class="bg-vector"></i><span>World Best Travel Agency</span></h2>
                            <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
                        </div>
                        <div class="lower-box">
                            <div class="lower-inner clearfix">
                                <div class="text-content">
                                    <ul>
                                        <li>Ratione voluptatem.sequi nesciunt.</li>
                                        <li>Ratione voluptatem.</li>
                                        <li>Ratione voluptatem sequi.</li>
                                    </ul>
                                </div>
                                <div class="image-box">
                                    <img src="web/images/resource/about-image-2.jpg" alt="" title="">
                                    <a href="https://www.youtube.com/watch?v=0xhr0j877bI" class="theme-btn lightbox-image overlink"><span class="icon fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="bg-image">
                            <img src="web/images/resource/about-vector-1.png" alt="" title="">
                        </div>
                        <div class="image-box">
                            <img src="web/images/resource/about-image-1.svg" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Popular Section-->
    <section class="popular-section">
        <div class="bg-layer" style="background-image: url(web/images/background/image-1.jpg);"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Modern & Beautiful</div>
                <h2><i class="bg-vector"></i><span>Our Most Popular Trekking</span></h2>
            </div>
            <div class="carousel-box">
                <div class="popular-carousel owl-theme owl-carousel">
				
                    <!-- Block -->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-1.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="packages.html">Moscow Red City Land</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-2.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="packages.html">Yellowstone & Mt Rushm</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="packages.html">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-3.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Los Angeles to San Franc</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="packages.html">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Block -->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-1.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="packages.html">Moscow Red City Land</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-2.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="packages.html">Yellowstone & Mt Rushm</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="packages.html">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-3.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Los Angeles to San Franc</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="packages.html">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>
					
					<!-- Block -->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-1.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="packages.html">Moscow Red City Land</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-2.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="packages.html">Yellowstone & Mt Rushm</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="packages.html">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="packages.html"><img src="web/images/resource/f-image-3.jpg" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Los Angeles to San Franc</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="packages.html">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="packages.html" class="theme-btn"><span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span></a></div>
                                <div class="video-link"><a href="packages.html" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Why Section-->
    <section class="why-section">
        <div class="floated-icon left"><img src="web/images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="web/images/resource/stones-right.svg" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <div class="subtitle">We Are Awesome</div>
                <h2><i class="bg-vector"></i><span>Why Choose Treker</span></h2>
            </div>

            <div class="row clearfix">
                <div class="left-col col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/resource/icon-1.svg" alt=""></div>
                                <h4>Diverse Destinations</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="web/images/resource/icon-2.svg" alt=""></div>
                                <h4>Value for Money</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="web/images/resource/icon-3.svg" alt=""></div>
                                <h4>Beautiful Places</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-col col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="images/resource/icon-4.svg" alt=""></div>
                                <h4>Fast Booking</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="web/images/resource/icon-5.svg" alt=""></div>
                                <h4>Support Team</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="web/images/resource/icon-6.svg" alt=""></div>
                                <h4>Passionate Travel</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-col col-xl-6 col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box"><img src="images/resource/why-image-1.svg" alt=""></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Trending Destinations Section-->
    <section class="trending-destinations">
        <div class="auto-container">

            <div class="title-box centered">
                <div class="subtitle">Top Destinations</div>
                <h2><i class="bg-vector"></i><span>Trending Destinations</span></h2>
            </div>

            <div class="gallery-box">
                <div class="masonry-container row clearfix">
                    <!--Block-->
                    <div class="dest-block-one masonry-item col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="web/images/resource/gallery-1.jpg" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="tours.html">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-one masonry-item column-width col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="web/images/resource/gallery-2.jpg" alt=""></a></div>
                            <div class="hvr-box alt-hvr">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="tours.html">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-one masonry-item col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="web/images/resource/gallery-3.jpg" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="tours.html">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-one masonry-item col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="web/images/resource/gallery-4.jpg" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="tours.html">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-one masonry-item column-width col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="web/images/resource/gallery-5.jpg" alt=""></a></div>
                            <div class="hvr-box alt-hvr">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="tours.html">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-one masonry-item col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="web/images/resource/gallery-6.jpg" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="tours.html">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Products Section-->
    <section class="products-section">
        <div class="floated-icon left"><img src="images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="images/resource/stones-right.svg" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <div class="subtitle">Shop Now</div>
                <h2><i class="bg-vector"></i><span>Featured Trekking Products</span></h2>
            </div>

            <div class="row clearfix">
                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-1.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-2.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Travel Suitcase Bag</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-3.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Travel Light Suitcase</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-4.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Smart Travel Gadgets</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-5.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Set of Black Silk Pillow</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-6.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Travel Slipping Support</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-7.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Travelling Black Suitcase</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
				
                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="product-single.html"><img src="web/images/resource/shop/prod-8.jpg" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="product-single.html" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="product-single.html" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="product-single.html">Coffee Travel Mug</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="see-more-link"><a href="shop.html" class="theme-btn btn-style-one"><span>View All Products <i class="icon"><img src="web/images/icons/logo-icon.svg" alt="" title=""></i></span></a></div>
        </div>
    </section>

    <!--Group Travel Section-->
    <section class="group-travel">
        <div class="bg-layer" style="background-image: url(web/images/background/image-2.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="row clearfix">
                    <!--Block-->
                    <div class="travel-block-one col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="title"><h4>Group Travel to Himalay</h4></div>
                            <div class="content">
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                                <div class="price"><span>$235.00</span></div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-one"><span>View Details <i class="icon"><img src="web/images/icons/logo-icon.svg" alt="" title=""></i></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="travel-block-one alternate col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="title"><h4>Group Travel to Himalay</h4></div>
                            <div class="content">
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                                <div class="price"><span>$235.00</span></div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-one"><span>View Details <i class="icon"><img src="web/images/icons/logo-icon.svg" alt="" title=""></i></span></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonials-one">
        <div class="bg-layer" style="background-image: url(web/images/background/image-3.jpg);"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Review & Testimonial</div>
                <h2><i class="bg-vector"></i><span>Top Reviews for Treker</span></h2>
            </div>
            <div class="carousel-box">
                <div class="testi-carousel owl-theme owl-carousel">
                    <!--Testi Block-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="web/images/icons/quotes-1.svg" alt=""></div>
                            <div class="image"><img src="web/images/resource/testi-thumb-1.jpg" alt=""></div>
                            <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most Fight School has specialized.</div>
                            <div class="info">
                                <div class="name">Randall Schwartz</div>
                                <div class="clearfix">
                                    <div class="designation">Women's Trainner</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="web/images/icons/quotes-1.svg" alt=""></div>
                            <div class="image"><img src="web/images/resource/testi-thumb-2.jpg" alt=""></div>
                            <div class="text">We teach martial arts because we love it — not because we want to make money on you. Unlike other martial.</div>
                            <div class="info">
                                <div class="name">Andru Smith</div>
                                <div class="clearfix">
                                    <div class="designation">Boxing Trainer</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block alternate">
                        <div class="inner-box">
                            <div class="image-layer" style="background-image: url(web/images/background/testi-image-1.jpg);"></div>
                            <div class="over-box">
                                <div class="over-title"><a href="#">MASTER TREKER TRAVEL</a></div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="web/images/icons/quotes-1.svg" alt=""></div>
                            <div class="image"><img src="web/images/resource/testi-thumb-1.jpg" alt=""></div>
                            <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most Fight School has specialized.</div>
                            <div class="info">
                                <div class="name">Randall Schwartz</div>
                                <div class="clearfix">
                                    <div class="designation">Women's Trainner</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="web/images/icons/quotes-1.svg" alt=""></div>
                            <div class="image"><img src="web/images/resource/testi-thumb-2.jpg" alt=""></div>
                            <div class="text">We teach martial arts because we love it — not because we want to make money on you. Unlike other martial.</div>
                            <div class="info">
                                <div class="name">Andru Smith</div>
                                <div class="clearfix">
                                    <div class="designation">Boxing Trainer</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block alternate">
                        <div class="inner-box">
                            <div class="image-layer" style="background-image: url(web/images/background/testi-image-1.jpg);"></div>
                            <div class="over-box">
                                <div class="over-title"><a href="#">MASTER TREKER TRAVEL</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Sponsors Section-->
    <section class="sponsors-one">
        <div class="auto-container">
            <div class="carousel-box">
                <div class="sponsors-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-1.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-2.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-3.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-4.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-1.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-2.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-3.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="web/images/resource/sponsor-4.png" alt=""></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--News Section-->
    <section class="news-section">
        <div class="floated-icon left"><img src="web/images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="web/images/resource/stones-right.svg" alt="" title=""></div>
        <div class="bg-layer" style="background-image: url(web/images/background/image-1.jpg);"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Treker Top News</div>
                <h2><i class="bg-vector"></i><span>Treker Latest News</span></h2>
            </div>
            <div class="content-box">
                <div class="row clearfix">
                    <!--Block-->
                    <div class="news-block-one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <div class="image"><a href="blog-single.html"><img src="web/images/resource/news-1.jpg" alt="" title=""></a></div>
                                <div class="cat"><span>Trekking</span></div>
                            </div>
                            <div class="lower-content">
                                <div class="info">
                                    <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span class="i-block">20 March 2022</span>
                                </div>
                                <h4><a href="blog-single.html">THE UPCOMING WBC CHAMP SHIPS 2022 in feb</a></h4>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative.</div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="news-block-one alternate col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="lower-content">
                                <div class="info">
                                    <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span class="i-block">20 March 2022</span>
                                </div>
                                <h4><a href="blog-single.html">THE BEST BOXERS IN THEIR WEIGH Target CATEGOR</a></h4>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative.</div>
                            </div>
                            <div class="image-box">
                                <div class="image"><a href="blog-single.html"><img src="web/images/resource/news-2.jpg" alt="" title=""></a></div>
                                <div class="cat"><span>Trekking</span></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="news-block-one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <div class="image"><a href="blog-single.html"><img src="web/images/resource/news-3.jpg" alt="" title=""></a></div>
                                <div class="cat"><span>Trekking</span></div>
                            </div>
                            <div class="lower-content">
                                <div class="info">
                                    <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span class="i-block">20 March 2022</span>
                                </div>
                                <h4><a href="blog-single.html">EFFECTIVE STRATEGIES & TIPS FROM THE BEST</a></h4>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Subscribe Section-->
    <section class="subscribe-section">
        
        <div class="auto-container">
            <div class="content-box">
                <div class="bg-layer" style="background-image: url(web/images/background/newsletter-bg.png);"></div>
                <div class="row clearfix">
                    <div class="image-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image"><img src="web/images/resource/newsletter-image.svg" alt=""></div>
                        </div>
                    </div>

                    <div class="text-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title">
                                <div class="subtitle">Newsletter</div>
                                <h2>SUBSCRIBE NOW</h2>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative programs in the nation.</div>
                            </div>
                            <div class="form-box subscribe-form">
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <span class="icon alt-icon far fa-envelope"></span>
                                            <input type="email" name="email" value="" placeholder="Email Address">
                                        </div>
                                        <button type="submit" class="theme-btn btn-style-one"><span>SUBSCRIBE <i class="icon fa fa-paper-plane"></i></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Footer-->
    <footer class="main-footer">
        <div class="bg-layer" style="background-image: url(web/images/background/f-bottom-bg.svg);"></div>
        <div class="floated-icon"><img src="web/images/resource/footer-stones.svg" alt="" title=""></div>
        <div class="info-section">
            <div class="auto-container">

                <div class="row clearfix">

                    <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <!--Logo-->
                        <div class="footer-logo">
                            <div class="logo"><a href="index.html" title="Treker"><img src="web/images/logo.svg" alt="" title="Treker"></a></div>
                        </div>
                        <div class="footer-text">Treker was founded in 1991 by a group of safety-focused professionals who created The Wingman Standard for rigorously vetting air charter operators.</div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <h6>EUROPE</h6>
                                <div class="info">
                                    <ul>
                                        <li>Europe 45 Gloucester Road London DT1M 3BF</li>
                                        <li><a href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <h6>ASIA & PACIFIC</h6>
                                <div class="info">
                                    <ul>
                                        <li>2473 Red Road Ste 98 Singapore SG</li>
                                        <li><a href="tel:+16232116319">+ 1 623 211 6319</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <h6>NORTH AMERICA</h6>
                                <div class="info">
                                    <ul>
                                        <li>Europe 45 Gloucester Road London DT1M 3BF</li>
                                        <li><a href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-section">
            <div class="auto-container">
                <div class="content-box">
                    <div class="row clearfix">

                        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                    <h6>About us</h6>
                                    <div class="links">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Community Blog</a></li>
                                            <li><a href="#">Rewards</a></li>
                                            <li><a href="#">Work with Us</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                    <h6>Exlopre Treker</h6>
                                    <div class="links">
                                        <ul>
                                            <li><a href="#">Account</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Affilitate</a></li><li><a href="#">Program</a></li>
                                            <li><a href="#">Our Partner</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                    <h6>Quick lInks</h6>
                                    <div class="links">
                                        <ul>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">News & press</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Careers</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="footer-column col-xl-4 col-lg-6 col-md-8 col-sm-12">
                            <h6>Gallery</h6>
                            <!--Logo-->
                            <div class="footer-gallery">
                                <div class="inner clearfix">
                                    <div class="image-block"><div class="image"><a href="web/images/resource/footer-thumb-1.jpg" class="lightbox-image"><img src="web/images/resource/footer-thumb-1.jpg" alt=""></a></div></div>
                                    <div class="image-block"><div class="image"><a href="web/images/resource/footer-thumb-2.jpg" class="lightbox-image"><img src="images/resource/footer-thumb-2.jpg" alt=""></a></div></div>
                                    <div class="image-block"><div class="image"><a href="web/images/resource/footer-thumb-3.jpg" class="lightbox-image"><img src="web/images/resource/footer-thumb-3.jpg" alt=""></a></div></div>
                                    <div class="image-block"><div class="image"><a href="web/images/resource/footer-thumb-4.jpg" class="lightbox-image"><img src="web/images/resource/footer-thumb-4.jpg" alt=""></a></div></div>
                                    <div class="image-block"><div class="image"><a href="web/images/resource/footer-thumb-5.jpg" class="lightbox-image"><img src="web/images/resource/footer-thumb-5.jpg" alt=""></a></div></div>
                                    <div class="image-block"><div class="image"><a href="web/images/resource/footer-thumb-6.jpg" class="lightbox-image"><img src="web/images/resource/footer-thumb-6.jpg" alt=""></a></div></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="f-bottom">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright">Copyright &copy; 2022 Treker. All Rights Reserved. Designed by ThemeIM</div>
                </div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper--> 

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img src="web/images/icons/arrow-up.svg" alt="" title="Go To Top"></span></div>



<script src="<?php echo e(asset('web/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/jquery.fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/isotope.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/touchspin.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/owl.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/custom-script.js')); ?>"></script>
</body>
</html><?php /**PATH D:\L10TREKKER\resources\views/index.blade.php ENDPATH**/ ?>