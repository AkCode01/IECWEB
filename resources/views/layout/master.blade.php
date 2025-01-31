<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ISLAMIC ECONOMICS CENTRE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/iec-images/final_logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/nivo-slider.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('venobox/venobox.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/widget.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('fonts/fonts.css') }}" type="text/css" media="screen">
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="eng__version">

    
<div id="sticky-header" class="dreamit_nav_manu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 text-center">
                <div class="logo">
                    <a class="logo_img" href="/">
                        <img src="{{ asset('assets/images/iec-images/final_logo.png') }}" alt="">
                    </a>
                    <a class="main_sticky" href="/" title="">
                        <img src="{{ asset('assets/images/iec-images/final_logo.png') }}" alt="astute">
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="dreamit_menu text-center">
                    <ul class="nav_scroll d-xl-block d-none ">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/Appointment') }}">Take an Appointment</a></li>
                        <li><a href="{{ url('/Scholarship') }}">Scholarship for student</a></li>
                        <li><a href="{{ url('/Fatawa') }}">Fatawa</a></li>
                        <li><a href="{{ url('/Contact') }}">Contact Details</a></li>
                        <li>
                            <a href="javascript:void(0);">Language<span> &nbsp; <i
                                        class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="https://iecdawateislami.com/index-ur.html">Urdu</a></li>
                                <li><a href="https://iecdawateislami.com/index.html">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="dreamit_menu" style="display: block;">
            <ul class="nav_scroll">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/Appointment') }}">Take an Appointment</a></li>
                <li><a href="{{ url('/Scholarship') }}">Scholarship for student</a></li>
                <li><a href="{{ url('/Fatawa') }}">Fatawa</a></li>
                <li><a href="{{ url('/Contact') }}">Contact Details</a></li>
                <li>
                    <a href="javascript:void(0);">Language <span><i class="fas fa-angle-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="https://iecdawateislami.com/index-ur.html">Urdu</a></li>
                        <li><a href="https://iecdawateislami.com/index.html">English</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
@yield('content')
    

<section class="footer__section">
    <div class="footer-area pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                    <div class="padding__add__right__for__design">
                        <div class="footer-logo">
                            <img src="{{ asset('assets/images/iec-images/footer_logo.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="widget-text">
                            <p>
                                provides Shariah guidance and consultation services based on Islamic principles,
                                ensuring that you conduct your business, partnerships, and other financial
                                transactions in accordance with Islamic principles
                            </p>
                        </div>
                        <div class="widget-nav-menu">
                            <div class="widget-social-menu-inner">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/c/DaruliftaAhleSunnat"><i
                                                class="fab fa-youtube"></i></a>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100094610843273&amp;locale=sq_AL"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12">
                    <div class="widget-footer-title">
                        <h2 class="dreamit-section-title"> <span>U</span>se Full Links</h2>
                    </div>
                    <div class="footer-title-menu">
                        <ul>
                            <li><a href="https://daruliftaahlesunnat.net/book/ur" target="_blank">Book</a></li>
                            <li><a href="https://daruliftaahlesunnat.net/ur">Dar ul Ifta Ahl-e-Sunnat </a></li>
                            <li><a href="https://daruliftaahlesunnat.net/branches/ur">Dar ul Ifta Ahl-e-Sunnat
                                    Branches</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget-footer-title">
                        <h2 class="dreamit-section-title"> <span>C</span>ontacts</h2>
                    </div>
                    <div class="footer-title-menu">
                        <ul>
                            <li><a href="javascript:void(0);">03037862512</a></li>
                            <li><a href="javascript:void(0);">feedback@iecdawateislami.com</a></li>
                            <li><a href="https://iecdawateislami.com/contact_details_en.html">Contact Details</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 Contacts__section">
                    <div class="widget-footer-title">
                        <h2 class="dreamit-section-title">
                            <span>D</span>arul Ifta Mobile Applications
                        </h2>
                    </div>
                    <div class="footer-title-menu">
                        <ul>
                            <li class="app-icon">
                                <a href="https://apps.apple.com/us/app/darul-ifta-ahlesunnat/id1195410303"
                                    target="_blank">
                                    <img src="{{ asset('assets/images/iec-images/app-store.png') }}"
                                        alt="App Store">
                                </a>
                            </li>
                            <li class="app-icon">
                                <a href="https://play.google.com/store/apps/details?id=com.dawateislami.daruliftaahlesunnat"
                                    target="_blank">
                                    <img src="{{ asset('assets/images/iec-images/play-store.png') }}"
                                        alt="Play Store">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12 mx-auto mb-2" style=" background: #ca9f6e; padding-top:1px;">
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <p class="mb-10 text-white">
                        Copyright © 2023 by I.T. Department of <span class="text-golden">Dawat-e-Islami</span>.
                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="mb-10 text-white text-right">
                        Terms &amp; Conditions . Services . Careers
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- scrollup section -->
    <div class="scroll-area">
        <div class="top-wrap">
            <div class="go-top-btn-wraper">
                <div class="go-top go-top-button">
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fas fa-arrow-up"></i></button>
        <form method="post" action="https://iecdawateislami.com/#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- jquery js -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('venobox/venobox.js') }}"></script>
    <!-- ajax mail js -->
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <!--  animated-text js -->
    <script src="{{ asset('assets/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script src="{{ asset('venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery nivo slider pack js -->
    <script src="{{ asset('assets/js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- jquery scrollup js -->
    <script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- jquery js -->
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <!-- jquery js -->
    <script>
        $(document).ready(function() {
            $('#bar3').barfiller({
                duration: 7000
            });
            $('#bar4').barfiller({
                duration: 7000
            });
        });
    </script>
    <!--faq jquery-->
    <script>
        (function($) {
            $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

            $('.accordion a').click(function(j) {
                var dropDown = $(this).closest('li').find('p');

                $(this).closest('.accordion').find('p').not(dropDown).slideUp();

                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $(this).closest('.accordion').find('a.active').removeClass('active');
                    $(this).addClass('active');
                }

                dropDown.stop(false, true).slideToggle();

                j.preventDefault();
            });
        })(jQuery);
    </script>
    <!--jave script -->
    <script>
        $(window).on('scroll', function() {
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $('.go-top').addClass('active');
            if (scrolled < 300) $('.go-top').removeClass('active');
        });

        $('.go-top').on('click', function() {
            $("html, body").animate({
                scrollTop: "0"
            }, 1200);
        });
    </script>
    <script>
        "use strict";
        jQuery(document).ready(function(o) {
            0 < o(".offset-side-bar").length &&
                o(".offset-side-bar").on("click", function(e) {
                    e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
                }),
                0 < o(".close-side-widget").length &&
                o(".close-side-widget").on("click", function(e) {
                    e.preventDefault(), o(".cart-group").removeClass("isActive");
                }),
                0 < o(".navSidebar-button").length &&
                o(".navSidebar-button").on("click", function(e) {
                    e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
                }),
                0 < o(".close-side-widget").length &&
                o(".close-side-widget").on("click", function(e) {
                    e.preventDefault(), o(".info-group").removeClass("isActive");
                }),
                o("body").on("click", function(e) {
                    o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
                }),
                o(".xs-sidebar-widget").on("click", function(e) {
                    e.stopPropagation();
                }),
                0 < o(".xs-modal-popup").length &&
                o(".xs-modal-popup").magnificPopup({
                    type: "inline",
                    fixedContentPos: !2,
                    fixedBgPos: !0,
                    overflowY: "auto",
                    closeBtnInside: !2,
                    callbacks: {
                        beforeOpen: function() {
                            this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                        },
                    },
                });
        });
    </script>
</body>
</html>