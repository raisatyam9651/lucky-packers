<?php $base_url = isset($base_url) ? $base_url : './'; ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lucky Transporter - Trusted Relocation Services</title>
    <meta name="description" content="Reliable packers and movers with 11+ years of experience. Lucky Transporter offers home, office, and vehicle relocation services across India. Get a free quote today!">
    <meta name="keywords" content="packers and movers, relocation services, home shifting, office relocation, car transportation, warehouse storage, Lucky Transporter, trusted packers in India">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/jpeg" href="<?php echo $base_url; ?>assets/media/favicon/logo.jpeg" sizes="96x96" />
    <link rel="icon" type="image/jpeg" href="<?php echo $base_url; ?>assets/media/favicon/logo.jpeg" />
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/media/favicon/logo.jpeg" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>assets/media/favicon/logo.jpeg" />
    <meta name="apple-mobile-web-app-title" content="Lucky Transporter" />
    <link rel="manifest" href="<?php echo $base_url; ?>assets/media/favicon/site.webmanifest" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Lucky Transporter - Trusted Relocation Services">
    <meta name="twitter:description" content="Explore our Home Relocation, Office Relocation, and Vehicle Moving Services. Reliable, secure, and available all over India.">
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/media/card/twitter-card.webp">

    <!-- Open Graph data -->
    <meta property="og:title" content="Lucky Transporter - Trusted Relocation Services" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $base_url; ?>" />
    <meta property="og:image" content="<?php echo $base_url; ?>assets/media/card/facebook-open-graph-card.webp" />
    <meta property="og:description" content="Relocation made easy with our reliable services – Home, Office, International, and Vehicle Moving Solutions." />
    <meta property="og:site_name" content="Lucky Transporter" />

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/animate.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/magnific-popup.min.css">
    <!-- FontAwesome 6 CDN (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/flaticon.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/odometer.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/aos.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/default.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/default-icons.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css01/main.min.css">

    <style>
        /* Fallback for FontAwesome Pro classes to Free Solid/Regular */
        .fa-solid, .fa-solid, .fa-duotone {
            font-family: "Font Awesome 6 Free" !important;
            font-weight: 900 !important; /* Fallback to Solid */
        }
        .fa-solid.fa-brands, .fa-solid.fa-brands {
            font-family: "Font Awesome 6 Brands" !important;
        }

        /* Map specific Pro-only icons to closest Free equivalents */
        .fa-person-dolly:before { content: "\f472"; } /* fa-dolly */
        .fa-shield-check:before { content: "\f3ed"; } /* fa-shield */
        .fa-cart-flatbed-boxes:before { content: "\f474"; } /* fa-cart-flatbed */
        .fa-person-carry-box:before { content: "\f4de"; } /* fa-truck-loading */
        .fa-messages:before { content: "\f086"; } /* fa-comments */

        /* Alignment Fix for Feature & Service Icons */
        .features__icon, .services__icon-three, .counter__icon, .counter__icon-two, .services__icon-two, .about__list-item-two .icon {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            line-height: 1 !important;
        }
        .features__icon i, .services__icon-three i, .counter__icon i, .counter__icon-two i, .services__icon-two i, .about__list-item-two .icon i {
            margin: 0 !important;
            display: inline-block !important;
        }

        /* Fallback for broken Flaticons to FontAwesome */
        i[class^="flaticon-"]:before, i[class*=" flaticon-"]:before,
        i[class^="tg-flaticon-"]:before, i[class*=" tg-flaticon-"]:before {
            font-family: "Font Awesome 6 Free" !important;
            font-weight: 900 !important;
            font-style: normal;
        }

        .flaticon-telephone:before, .flaticon-support:before { content: "\f095"; } /* fa-phone */
        .flaticon-envelope:before { content: "\f0e0"; } /* fa-envelope */
        .flaticon-time:before { content: "\f017"; } /* fa-clock */
        .flaticon-placeholder:before, .flaticon-location:before, .flaticon-location-1:before { content: "\f3c5"; } /* fa-location-dot */
        .flaticon-right-arrow:before { content: "\f061"; } /* fa-arrow-right */
        .flaticon-left-arrow:before { content: "\f060"; } /* fa-arrow-left */
        .flaticon-check:before { content: "\f00c"; } /* fa-check */
        .flaticon-truck:before { content: "\f0d1"; } /* fa-truck */
        .flaticon-warehouse:before, .flaticon-warehouse-1:before { content: "\f494"; } /* fa-warehouse */
        .flaticon-box:before, .flaticon-package:before { content: "\f466"; } /* fa-box */
        .flaticon-global-distribution:before, .flaticon-planet-earth:before { content: "\f0ac"; } /* fa-earth-americas */
        .flaticon-calendar:before, .flaticon-calendar-1:before { content: "\f133"; } /* fa-calendar-days */
        .flaticon-search:before { content: "\f002"; } /* fa-magnifying-glass */
        
        .tg-flaticon-menu:before, .tg-flaticon-menu-1:before, .tg-flaticon-menu-2:before { content: "\f0c9"; } /* fa-bars */
        .tg-flaticon-close:before, .tg-flaticon-close-1:before { content: "\f00d"; } /* fa-xmark */
        .tg-flaticon-arrow-up:before, .tg-flaticon-arrowhead-up:before { content: "\f062"; } /* fa-arrow-up */

        /* Accordion / FAQ Icons fallback */
        .accordion-button:not(.collapsed)::after {
            background-image: none !important;
            content: "\f077" !important; /* fa-chevron-up */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }
        .accordion-button::after {
            background-image: none !important;
            content: "\f078" !important; /* fa-chevron-down */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }
    </style>

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LWSKXEW7LT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LWSKXEW7LT');
    </script>

    <!-- Event snippet for Submit Lead Form conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion_submit_lead_form(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-11548299495/aSGGCK_xhIMaEOeh1IIr',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!-- Event snippet for Call Button Click conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion_call_button(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-11548299495/_nnDCJC09IIaEOeh1IIr',
                'event_callback': callback
            });
            return false;
        }
    </script>
    <!-- Event snippet for Whatsapp Button conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion_whatsapp_button(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-11548299495/ezCoCNXNhYMaEOeh1IIr',
                'event_callback': callback
            });
            return false;
        }
    </script>


</head>
<body class="theme-blue">

    <!-- header-area -->
<header>
    <div id="header-fixed-height"></div>
    <!-- top baar -->
    <div class="top-header-01-main" role="banner">
        <div class="container">
            <div class="top-header-01">
                <!-- Left Section -->
                <div class="top-header-01-left-section" role="contentinfo">
                    <div>
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <span>Welcome to <strong>Lucky Transporter</strong></span>
                    </div>
                    <div>
                        <i class="fa-regular fa-phone" aria-hidden="true"></i>
                        <span>
                            <a href="tel:+91 8003966646" onclick="gtag_report_conversion_call_button();" title="Call Lucky Transporter">
                                +91 8003966646                            </a>
                        </span>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="top-header-01-right-section">
                    <a href="javascript:void(0);" class="get_a_free_quote" title="Get a Free Quote from Lucky Transporter">
                        <i class="fa-regular fa-paper-plane" aria-hidden="true"></i>Get Free Quote
                    </a>
                    <a href="javascript:void(0);" class="make_payment_btn_pop" title="Make a Payment to Lucky Transporter">
                        <i class="fa-regular fa-receipt" aria-hidden="true"></i>Make A Payment
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- header menu baar -->

    <div id="sticky-header" class="tg-header__area tg-header__area-two" role="banner">
        <div class="container">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?php echo $base_url; ?>" title="Lucky Transporter - Home">
                                    <img src="<?php echo $base_url; ?>assets/media/logo/logo.jpeg" alt="Lucky Transporter Logo" loading="lazy" style="height: 60px;">
                                </a>
                            </div>

                            <!-- Navigation Menu -->
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex" role="navigation" aria-label="Main Navigation">
                                <ul class="navigation">
                                    <!-- Home Page -->
                                    <li>
                                        <a class="active" href="<?php echo $base_url; ?>" title="Go to Home Page">Home</a>
                                    </li>

                                    <!-- About Us -->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>about-us.php" title="Learn more About Us">About Us</a>
                                    </li>

                                    <!-- Our Work -->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>our-work.php" title="Explore Our Work">Our Work</a>
                                    </li>

                                    <!-- Our Services -->
                                    <li class="menu-item-has-children">
                                        <a class="" href="javascript:void(0);" title="Explore Our Services">Our Services</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/" title="View All Services">All Services</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/transportation.php" title="Transportation Services">Transportation</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/packing-and-moving.php" title="Packing and Moving Services">Packing and Moving</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/loading-and-unloading.php" title="Loading and Unloading Services">Loading and Unloading</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/unpacking-and-escort.php" title="Unpacking and Escort Services">Unpacking and Escort</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/home-shifting.php" title="Home Shifting Services">Home Shifting</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/domestic-relocation.php" title="Domestic Relocation Services">Domestic Relocation</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/international-relocation.php" title="International Relocation Services">International Relocation</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/warehouse-services.php" title="Warehouse Services">Warehouse Services</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/car-and-bike-transportation.php" title="Car and Bike Transportation Services">Car and Bike Transportation</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/office-shifting.php" title="Office Shifting Services">Office Shifting</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/hotel-shifting.php" title="Hotel Shifting Services">Hotel Shifting</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/factory-shifting.php" title="Factory Shifting Services">Factory Shifting</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/pet-moving.php" title="Pet Moving Services">Pet Moving</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/custom-clearance.php" title="Custom Clearance Services">Custom Clearance</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/painting-moving-services.php" title="Painting Moving Services">Painting Moving Services</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/goods-insurance.php" title="Goods Insurance Services">Goods Insurance</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>corporate-relocation.php" title="Corporate Relocation Services">Corporate Relocation</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- FAQs -->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>faq.php" title="Frequently Asked Questions">FAQs</a>
                                    </li>

                                    <!-- Reviews -->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>client-reviews.php" title="See What Our Clients Say">Client Reviews</a>
                                    </li>

                                    <!-- Our Network -->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>our-network.php" title="Our Network Coverage">Our Network</a>
                                    </li>

                                    <!-- Blogs-->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>blogs/" title="Read Our Blogs">Blogs</a>
                                    </li>

                                    <!-- Contact Us -->
                                    <li>
                                        <a class="" href="<?php echo $base_url; ?>contact-us.php" title="Get in Touch With Us">Contact Us</a>
                                    </li>

                                    <!-- Track Shipment -->
                                    <li style="display:flex;align-items:center;">
                                        <a href="<?php echo $base_url; ?>tracking.php"
                                            class=" d-inline-flex align-items-center gap-2"
                                            style="background:#0A4D68;color:#fff !important;border-radius:8px;font-size:12px;font-weight:700;padding:7px 14px;white-space:nowrap;line-height:1.4;"
                                            title="Track Your Shipment">
                                            <i class="fas fa-map-marker-alt" style="font-size:11px;"></i> Track Shipment
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tgmenu__action tgmenu__action-two d-none d-md-flex">
                                <ul class="list-wrap">
                                    <li class="header-search"></li>
                                </ul>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mobile-nav-toggler" title="Open Mobile Navigation">
                                <i class="tg-flaticon-menu-1"></i>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn" title="Close Mobile Menu"><i class="tg-flaticon-close"></i></div>
                                <div class="nav-logo">
                                    <a href="<?php echo $base_url; ?>" title="Lucky Transporter - Home">
                                        <img src="<?php echo $base_url; ?>assets/media/logo/logo.jpeg" alt="Lucky Transporter Logo" loading="lazy" style="height: 60px;">
                                    </a>
                                </div>
                                <div class="tgmobile__track-btn" style="padding:14px 20px 6px;">
                                    <a href="<?php echo $base_url; ?>tracking.php" class="d-flex align-items-center justify-content-center gap-2 w-100" style="background:#0A4D68;color:#fff;border-radius:10px;font-size:14px;font-weight:600;padding:11px 18px;text-decoration:none;" title="Track Your Shipment">
                                        <i class="fas fa-map-marker-alt"></i> Track Your Shipment
                                    </a>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!-- Menu Injected by JavaScript -->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=61571732304929" target="_blank" rel="noopener noreferrer" title="Follow us on Facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" target="_blank" rel="noopener noreferrer" title="Connect with us on LinkedIn">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCWIHCiznHKhWh5_pplTBFvQ" target="_blank" rel="noopener noreferrer" title="Subscribe to our YouTube Channel">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; font-size: 15px; color: #fff; line-height: 2.8rem;background-color: var(--tg-theme-primary);font-weight: 600;">
        <i class="fas fa-handshake"></i>
        <span style="font-weight: bold;">आपके भरोसे का साथी</span>,
        <i class="fas fa-shoe-prints"></i>
        <span style="font-weight: bold;">हर कदम पर !</span>
    </div>

</header>
<?php include 'modals.php'; ?>
