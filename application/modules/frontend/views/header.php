<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Your Policy</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/frontend/');?>img/logo/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/meanmenu.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/animate.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/swiper-bundle.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/slick.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/nouislider.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/magnific-popup.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/font-awesome-pro.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/flaticon.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/spacing.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/main.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->
   <!-- search popup start -->
   <div class="search__popup z-index-8">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index.html">
                           <img src="<?php echo base_url('assets/frontend/');?>img/logo/logo.png" alt="logo">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="search-popup-overlay"></div>
   <!-- search popup end -->
   <!-- header area start -->
   <header>
      <div class="tpheader-3__top pt-10 pb-10 grey-bg-1 d-none d-md-block">
         <div class="container">
            <div class="row justify-content-center align-items-center">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-8">
                  <div class="tpheader-3__wrapper">
                     <div class="tpheader-3__logo">
                        <a href="index.html"><img src="<?php echo base_url('assets/frontend/');?>img/logo/logo-black.png" alt=""></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-3 col-md-3 col-sm-2 col-1">
                  <div class="tpheader-3__contact-number ">
                     <div class="tpheader-3__smcontact-list ml-20">
                        <div class="sm-clist__icon">
                           <i class="fa-light fa-phone"></i>
                        </div>
                        <div class="sm-clist__text text-start ml-15 mr-25">
                           <span>Call Us Anytime</span>
                           <a href="tel:+78690989067">+98 656 768 6789 </a>
                        </div>
                     </div>
                     <div class="tpheader-3__smcontact-list ml-20">
                        <div class="sm-clist__icon">
                           <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="sm-clist__text text-start ml-15 mr-25">
                           <span>Drop a Line</span>
                           <a href="tel:+78690989067">needhelp@gmail.com </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                  <div class="tpheader-3__top-right">
                     <div class="tp-header-search search-open-btn d-none d-xxl-block">
                        <a href="javascript:void(0);"> <i class="fa-regular fa-magnifying-glass"></i></a>
                     </div>
                     <div class="tpheader-3-btn text-end pt-10">
                        <a class="tp-btn-5" href="contact.html">Get a Quote</a>
                     </div>
                     <div class="sidebar__menu">
                        <a class="tp-menu-bar" href="#"><i class="fa-solid fa-bars"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="header-sticky" class="tpheader-3__bottom header__sticky">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-9 col-lg-8">
                  <div class="main-menu text-left">
                     <div class="tpheader-3__wrapper-inner">
                        <div class="tpheader-3__menu text-center ">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="has-dropdown"><a href="<?=base_url();?>">Home</a>
                                    <!-- <ul class="sub-menu">
                                       <li><a href="index.html">Home style 01</a></li>
                                       <li><a href="index-2.html">Home style 02</a></li>
                                       <li><a href="index-3.html">Home style 03</a></li>
                                    </ul> -->
                                 </li>
                                 <li><a href="Insurance_01.html">Insurance</a>
                                    <ul class="sub-menu">
                                       <li><a href="Insurance_01.html">Insurance 01</a></li>
                                       <li><a href="Insurance_02.html">Insurance 02</a></li>
                                       <li><a href="Insurance_03.html">Insurance 03</a></li>
                                       <li><a href="Insurance-details.html">Insurance Details</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="portfolio_01.html">Portfolio</a>
                                    <ul class="sub-menu">
                                       <li><a href="portfolio_01.html">Portfolio 01</a></li>
                                       <li><a href="portfolio_02.html">Portfolio 02</a></li>
                                       <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                       <li><a href="about.html">About</a></li>
                                       <li><a href="team.html">Team</a></li>
                                       <li><a href="team-details.html">Team Details</a></li>
                                       <li><a href="testimonial.html">Testimonial</a></li>
                                       <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                       <li><a href="faqs.html">Faqs</a></li>
                                       <li><a href="error.html">Error</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="our-blog.html">News</a>
                                    <ul class="sub-menu">
                                       <li><a href="our-blog.html">Blog</a></li>
                                       <li><a href="blog-details.html">Blog Details</a></li>
                                       <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="contact.html">Contact</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4">
                  <div class="tpheader-3__header-social">
                     <ul>
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="mobile-header d-md-none grey-bg-1">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-6">
               <div class="mobile__logo">
                  <a href="index.html"><img src="<?php echo base_url('assets/frontend/');?>img/logo/logo-black.png" alt=""></a>
               </div>
            </div>
            <div class="col-6">
               <div class="mobile__menu text-end">
                  <a class="tp-menu-bar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header area end -->
   <!-- tp-offcanvus-area-start -->
   <div class="tpoffcanvas-area">
      <div class="offcanvas__wrapper">
         <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
               <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
               <a href="index.html">
                  <img src="<?php echo base_url('assets/frontend/');?>img/logo/logo-black.png" alt="">
               </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="tpoffcanvas__contact">
               <h4 class="tpoffcanvas__title">Contacts</h4>
               <div class="tpoffcanvas__contact-content d-flex">
                  <div class="tpoffcanvas__contact-content-icon">
                     <i class="fa-sharp fa-solid fa-location-dot"></i>
                  </div>
                  <div class="tpoffcanvas__contact-content-content">
                     <a
                        href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">86
                        Road Broklyn Street, 600 </a>
                  </div>
               </div>
               <div class="tpoffcanvas__contact-content d-flex">
                  <div class="tpoffcanvas__contact-content-icon">
                     <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="tpoffcanvas__contact-content-content">
                     <a href="mailto:needhelp@company.com"> Needhelp@company.com </a>
                  </div>
               </div>
               <div class="tpoffcanvas__contact-content d-flex">
                  <div class="tpoffcanvas__contact-content-icon">
                     <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="tpoffcanvas__contact-content-content">
                     <a href="tel:01310-069824"> +92 666 888 0000</a>
                  </div>
               </div>
            </div>
            <div class="tpoffcanvas__social">
               <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
               <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
               <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
               <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->