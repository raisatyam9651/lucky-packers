<?php $base_url = '../'; include '../header.php'; ?>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-packing.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Painting Moving Services</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" style="color: #fff;">Our Services</span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Painting Moving Services</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        
        <style>
            .services__details-thumb img, .services__details-inner-img img {
                filter: grayscale(0) !important;
                -webkit-filter: grayscale(0) !important;
                opacity: 1 !important;
            }
            .shop-cat-list ul li a {
            display: flex !important;
            align-items: center;
            justify-content: space-between;
            padding: 12px 20px !important;
            border-bottom: 1px solid #eee;
            color: #1a1a1a !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .shop-cat-list ul li a:hover {
            color: #e11c24 !important;
        }

        .shop-cat-list ul li a.active {
                background: #e11c24 !important;
                color: #fff !important;
            }
            /* Fix for breadcrumb black and white issue */
            .breadcrumb__area.breadcrumb__bg::after {
                mix-blend-mode: normal !important;
                background: rgba(0, 0, 0, 0.5) !important;
            }
        </style>
        <!-- services-details-area -->
        <section class="services__details-area section-p-60">
            <div class="container">
                <div class="services__details-inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <aside class="services__sidebar">
                                <div class="blog-widget">
                                    <h4 class="widget-title">Our Services</h4>
                                    <div class="shop-cat-list">
                                        <ul class="list-wrap">
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/painting-moving-services.php" title="Painting Moving Services">Painting Moving Services</a>
                                            </li>
                                            <li>
                                                <a class="" href="<?php echo $base_url; ?>our-services/goods-insurance.php" title="Goods Insurance Services">Goods Insurance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="services__widget services__widget-two">
                                    <div class="sidebar__logo">
                                        <a href="<?php echo $base_url; ?>">
                                            <img src="<?php echo $base_url; ?>assets/media/logo/logo.jpeg" alt="Lucky Transporter Pvt. Ltd. Logo" style="width: 80%;" title="Lucky Transporter Pvt. Ltd.">
                                        </a>
                                    </div>
                                    <div class="sidebar__contact">
                                        <h2 class="title">Tailored Relocation Solutions for You</h2>
                                        <a href="tel:+91 8003966646" class="sidebar__phone">
                                            <i class="flaticon-telephone"></i> +91 8003966646                                        </a>
                                        <a href="javascript:void(0);" class="btn get_a_free_quote" title="Get a Free Quote">
                                            Get A Free Quote
                                            <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="Get A Free Quote" class="injectable">
                                        </a>
                                    </div>
                                    <div class="sidebar__shape" style="background-image: url('<?php echo $base_url; ?>assets/media/bg/dz-cargo-packers-service-slidebar.webp');">
                                    </div>
                                </div>

                            </aside>
                        </div>
                        <div class="col-lg-8">
                            <div class="services__details-thumb">
                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-packing-main.png"
                                    alt="Expert Fine Art and Painting Moving Services by Lucky Transporter"
                                    title="Specialized Artwork Relocation Solutions">
                            </div>

                            <div class="services__details-content">
                                <h1 class="title">Fine Art and Painting Moving That Handles Your Collection Like Museum Staff</h1>
                                <p>Moving paintings and artwork isn't like moving furniture. One scratch on a framed canvas, one crack in a marble sculpture, and you've lost something irreplaceable—not just in value, but in meaning. That's why Lucky Transporter treats every piece as if it belonged in a gallery.</p>

                                <p>Our art handlers are trained specifically for fragile, high-value pieces. We use museum-grade materials, custom-built crates, and climate-controlled vehicles to ensure your collection arrives exactly as it left. Whether it's a single watercolor or an entire gallery wall, we bring the same level of care.</p>

                                <h2>The Difference Between Art Movers and Regular Movers</h2>
                                <p>Regular moving companies don't have the training or materials to protect fine art properly. The risks aren't worth taking:</p>
                                <ul>
                                    <li><strong>Surface scratches</strong> — Frames and canvases get damaged from contact with other items during transit</li>
                                    <li><strong>Humidity warping</strong> — Oil paintings and watercolor paper warp when exposed to temperature swings</li>
                                    <li><strong>Impact breakage</strong> — Insufficient cushioning leads to cracked frames, shattered glass, torn canvas</li>
                                    <li><strong>Value loss</strong> — Improper handling reduces collectible and insurance value permanently</li>
                                </ul>
                                <p>Specialized art moving eliminates these risks through materials and methods developed for galleries and museums.</p>

                                <h2>What We Move</h2>
                                <ul>
                                    <li><strong>Oil Paintings</strong> — Canvas and panel pieces requiring corner protection and climate stability</li>
                                    <li><strong>Watercolors and Prints</strong> — Acid-sensitive works needing flat positioning with humidity control</li>
                                    <li><strong>Sculptures</strong> — Marble, bronze, glass, and mixed-media pieces requiring individual crating</li>
                                    <li><strong>Antique Furniture</strong> — Pieces with fragile finishes, ornate details, and historical value</li>
                                    <li><strong>Photography and Framed Art</strong> — Signed prints, limited editions, and family heirlooms</li>
                                </ul>

                                <h2>How We Protect Every Piece</h2>

                                <div>
                                    <h3>Step 1: Condition Assessment</h3>
                                    <p>We inspect each piece before packing—documenting existing damage, checking frame integrity, and noting any areas needing special attention. This becomes your baseline for insurance and delivery verification.</p>
                                </div>

                                <div>
                                    <h3>Step 2: Museum-Grade Packing</h3>
                                    <p>Each piece gets multi-layer protection: acid-free glassine paper as the primary barrier, custom foam inserts sized to the artwork, and padded corner guards for frames. No two pieces are packed the same way—each gets exactly what it needs.</p>
                                </div>

                                <div>
                                    <h3>Step 3: Custom Crating</h3>
                                    <p>High-value or fragile pieces go into purpose-built wooden crates. These are sized to the artwork with foam lining and vibration-dampening materials. The crate becomes its protected traveling home.</p>
                                </div>

                                <div>
                                    <h3>Step 4: Climate-Controlled Transit</h3>
                                    <p>Our climate-controlled vehicles maintain stable temperature and humidity throughout transit. This is critical for oil paints, watercolors, and any piece sensitive to environmental changes.</p>
                                </div>

                                <div>
                                    <h3>Step 5: Careful Unpacking and Placement</h3>
                                    <p>Upon arrival, we unpack each piece professionally, inspect for any transit issues, and position it exactly where you want it. We handle hanging, lighting adjustment, and any assembly needed.</p>
                                </div>

                                <div class="services__details-content-inner-two">
                                    <div class="row gutter-24">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-packing-01.png"
                                                    alt="Careful crating of a large framed painting for secure transit"
                                                    title="Custom Art Crating">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-packing-02.png"
                                                    alt="Professional art handlers positioning artwork in a new home"
                                                    title="Fine Art Placement">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>Artwork We Handle</h2>
                                <ul>
                                    <li><strong>Oil Paintings</strong> — Canvas and panel pieces requiring climate control and careful corner protection</li>
                                    <li><strong>Watercolors and Prints</strong> — Acid-sensitive works needing flat positioning and humidity protection</li>
                                    <li><strong>Sculptures</strong> — Marble, bronze, glass, and mixed-media pieces requiring custom crating</li>
                                    <li><strong>Antiques</strong> — Historical pieces with fragile finishes and collector value</li>
                                    <li><strong>Photography and Framed Art</strong> — Signed prints, photography, and limited editions</li>
                                </ul>

                                <h2>Who Needs Art Moving Services</h2>
                                <ul>
                                    <li><strong>Private Collectors</strong> — Moving home galleries or relocating a single precious piece</li>
                                    <li><strong>Art Galleries</strong> — Exhibition setup, breakdown, and client delivery</li>
                                    <li><strong>Corporate Offices</strong> — Boardroom art, lobby installations, and hotel artwork</li>
                                    <li><strong>Artists</strong> — Studio relocations and gallery representation transfers</li>
                                </ul>

                                <div class="services__details-benefit">
                                    <h2>Common Questions About Art Moving</h2>
                                    <br>
                                    <div class="faq__wrap">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        How do you protect oil paintings from climate damage?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We use climate-controlled vehicles that maintain stable temperature and humidity throughout transit. Oil paintings are particularly sensitive to temperature changes, which can cause paint cracking or canvas warping. Our vehicles prevent this by keeping conditions consistent from pickup to delivery.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Can you move oversized or irregular-shaped artwork?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. We custom-build crates for oversized pieces and use specialized handling equipment. For very large canvas works, we can arrange professional rolling with archival tubes—a standard museum practice. Every piece gets a solution tailored to its dimensions and vulnerabilities.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Do you provide insurance for valuable artwork?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. We offer transit insurance coverage based on declared values. For high-value collections, we work with specialized art insurance providers to ensure full coverage during handling, transport, and installation. Documentation of condition before the move supports the claims process if needed.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Do you handle international art shipments?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. We handle global art logistics including customs documentation for fine art, specialized import permits, and coordination with international art handlers and customs brokers. Our network covers major art market destinations worldwide.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        What should I do to prepare my artwork before the move?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Photograph each piece from multiple angles before we arrive—this creates a record for insurance purposes and helps verify condition upon delivery. Let us know about any existing damage, loose frames, or特别 sensitive areas. We handle the rest from packing to placement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Trust Your Collection to Specialists</h2>
                                <p>Art moves aren't like other moves. The stakes are higher and the tolerances are smaller. Lucky Transporter's art handling team brings museum-grade techniques to every relocation—custom crating, climate control, and careful positioning included. Contact us for an assessment and quote for your collection.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-details-area-end -->

        <article class="main-container__marquee" style="background-color: #000;">
            <div class="main-container__marquee-track">
                <div class="main-container__marquee-items">
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> 11+ Years of Trusted Service</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Pan-India Relocation Experts</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Home & Office Relocation Made Easy</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Car & Bike Safe Transport</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> International Relocation Specialists</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Licensed & Certified Movers</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Advanced Tracking Technology</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Custom Packing for Fragile Items</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Transparent Pricing Policy</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Fast & Secure Deliveries</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Personalized Moving Solutions</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Corporate Relocation Discounts</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Comprehensive Goods Insurance</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Hassle-Free Pet Relocation</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Experienced Packing Team</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> 24/7 Customer Assistance</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Modern & Reliable Fleet</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Flexible Scheduling Options</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Satisfaction Guaranteed</span>
                </div>
                <div aria-hidden="true" class="main-container__marquee-items">
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> 11+ Years of Trusted Service</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Pan-India Relocation Experts</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Home & Office Relocation Made Easy</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Car & Bike Safe Transport</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> International Relocation Specialists</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Licensed & Certified Movers</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Advanced Tracking Technology</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Custom Packing for Fragile Items</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Transparent Pricing Policy</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Fast & Secure Deliveries</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Personalized Moving Solutions</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Corporate Relocation Discounts</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Comprehensive Goods Insurance</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Hassle-Free Pet Relocation</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Experienced Packing Team</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> 24/7 Customer Assistance</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Modern & Reliable Fleet</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Flexible Scheduling Options</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Satisfaction Guaranteed</span>
                </div>
            </div>
        </article>

        <!-- counter-area -->
        <section class="counter__area counter__bg" style="padding-top:60px;padding-bottom:40px;" data-background="<?php echo $base_url; ?>assets/media/svg/vector_bg05.svg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter__item-two">
                            <div class="counter__icon-two">
                                <i class="fa-solid fa-box-check"></i>
                            </div>
                            <div class="counter__content-two">
                                <h2 class="count"><span class="counter-number">26</span>K+</h2>
                                <p>Completed Moves</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter__item-two">
                            <div class="counter__icon-two">
                                <i class="fa-solid fa-face-smile"></i>
                            </div>
                            <div class="counter__content-two">
                                <h2 class="count"><span class="counter-number">21</span>K+</h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter__item-two">
                            <div class="counter__icon-two">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <div class="counter__content-two">
                                <h2 class="count"><span class="counter-number">82</span>+</h2>
                                <p>Expert Team Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter__item-two">
                            <div class="counter__icon-two">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div class="counter__content-two">
                                <h2 class="count"><span class="counter-number">40</span>+</h2>
                                <p>WorldWide Office</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial-area -->
        <section class="testimonial__area-four">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="testimonial__wrap fix">
                            <div class="testimonial__icon testimonial__icon-two">
                                <img src="<?php echo $base_url; ?>assets/media/icon/quote.svg" alt="Quote Icon" class="injectable">
                            </div>
                            <div class="testimonial-slider-dot">
                                <div class="swiper testimonial__nav">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><button><img src="<?php echo $base_url; ?>assets/media/testimonial/avatar-1.webp" alt="Rajat Sharma"></button></div>
                                        <div class="swiper-slide"><button><img src="<?php echo $base_url; ?>assets/media/testimonial/avatar-2.webp" alt="Priya Mehta"></button></div>
                                        <div class="swiper-slide"><button><img src="<?php echo $base_url; ?>assets/media/testimonial/avatar-3.webp" alt="Anjali Gupta"></button></div>
                                        <div class="swiper-slide"><button><img src="<?php echo $base_url; ?>assets/media/testimonial/avatar-4.webp" alt="Ramesh Verma"></button></div>
                                        <div class="swiper-slide"><button><img src="<?php echo $base_url; ?>assets/media/testimonial/avatar-5.webp" alt="Sneha Rajput"></button></div>
                                        <div class="swiper-slide"><button><img src="<?php echo $base_url; ?>assets/media/testimonial/avatar-6.webp" alt="Vivek Mishra"></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper testimonial-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__info">
                                                <h2 class="name">Rajat Sharma</h2>
                                                <span>Delhi, India</span>
                                            </div>
                                            <div class="testimonial__rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“Lucky Transporter made my home relocation completely hassle-free. Their team was professional, on-time, and handled my belongings with utmost care. Highly recommended!”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__info">
                                                <h2 class="name">Priya Mehta</h2>
                                                <span>Mumbai, India</span>
                                            </div>
                                            <div class="testimonial__rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“Their service was excellent! My car was delivered safely and on time to Bangalore. Although the initial scheduling took some time, the overall experience was fantastic.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__info">
                                                <h2 class="name">Anjali Gupta</h2>
                                                <span>Pune, India</span>
                                            </div>
                                            <div class="testimonial__rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“I was nervous about relocating my office, but Lucky Transporter handled everything smoothly. The team was efficient, and they ensured minimal downtime for my business.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__info">
                                                <h2 class="name">Ramesh Verma</h2>
                                                <span>Hyderabad, India</span>
                                            </div>
                                            <div class="testimonial__rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“The packing was impressive, and the staff was very courteous. My furniture arrived without a single scratch. Their tracking system is also very helpful.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__info">
                                                <h2 class="name">Sneha Rajput</h2>
                                                <span>Chennai, India</span>
                                            </div>
                                            <div class="testimonial__rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“I’ve used their services twice now, and both times were exceptional. Their attention to detail and care for my belongings is unmatched. Will definitely use again!”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__info">
                                                <h2 class="name">Vivek Mishra</h2>
                                                <span>Kolkata, India</span>
                                            </div>
                                            <div class="testimonial__rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“They made my inter-city relocation a breeze. The team was friendly, and the pricing was transparent with no hidden costs. Definitely the best movers I’ve hired!”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__nav-wrap testimonial__nav-wrap-three">
                                    <button class="testimonial-button-prev"><i class="flaticon-left-arrow"></i></button>
                                    <button class="testimonial-button-next"><i class="flaticon-right-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "../recent_blogs_section.php"; ?>

        <!-- client area -->
        <section class="brand__area section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">// Our Partners</span>
                            <h2 class="title">Trusted by Leading Companies</h2>
                            <p>We are proud to be the trusted relocation partner for thousands of households and businesses across India.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper brand-active fix">
                    <div class="swiper-wrapper">
                        <!-- Client 1 to 13 -->
                        <?php for ($i = 1; $i <= 13; $i++): ?>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client<?php echo sprintf('%02d', $i); ?>.webp"
                                        alt="Client <?php echo $i; ?> Logo | Trusted by Lucky Transporter"
                                        title="Client <?php echo $i; ?> | Partner of Lucky Transporter">
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- client area end -->

    </main>
    <!-- main-area-end -->
<?php include '../footer.php'; ?>
