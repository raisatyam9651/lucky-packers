<?php $base_url = '../'; include '../header.php'; ?>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-loading.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Factory Shifting</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" style="color: #fff;">Our Services</span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Factory Shifting</span>
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
                transition: all 0.3s ease;
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
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="services__details-thumb">
                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-loading-main.png"
                                    alt="Expert Factory Shifting Services by Lucky Transporter"
                                    title="Professional Industrial Relocation Solutions">
                            </div>

                            <div class="services__details-content">
                                <h1 class="title">Seamless Factory Shifting Services That Keep Your Business Running</h1>
                                <p>When your factory needs to move, every hour of downtime means lost production and revenue. At <strong>Lucky Transporter</strong>, we understand that industrial relocations are high-pressure operations where timing and precision matter above everything else. Our dedicated team has helped dozens of manufacturing units across India relocate without missing a single scheduled delivery.</p>

                                <p>What sets us apart is our end-to-end approach to factory moves. From the initial site survey to the final installation and testing at your new facility, we manage every detail. No subcontracting, no handoffs that create confusion—just one team with one mission: getting your factory back up and running as quickly as possible.</p>

                                <h2>What Makes Our Factory Shifting Service Different?</h2>
                                <ul>
                                    <li><strong>Dedicated Project Managers:</strong> Every factory relocation gets its own assigned manager who coordinates all aspects of the move and serves as your single point of contact throughout the process.</li>
                                    <li><strong>Equipment-Specific Handling:</strong> We assess each piece of machinery individually and use the appropriate lifting devices, cradles, and securing methods rather than a generic approach.</li>
                                    <li><strong>Production-Line Planning:</strong> We work around your production schedule, planning the move in phases so critical departments can resume operations while others are still being relocated.</li>
                                    <li><strong>Complete Site Management:</strong> Beyond just moving equipment, we handle disconnection, reconnection, and basic commissioning—giving your team a head start on the new setup.</li>
                                    <li><strong>Real-Time Move Tracking:</strong> GPS-equipped vehicles and a live dashboard let you monitor your equipment's location and estimated arrival at any time.</li>
                                </ul>

                                <h2>Our Factory Shifting Process</h2>

                                <div>
                                    <h3>1. Site Survey and Move Planning</h3>
                                    <p>Our engineers visit your facility to catalog every item that needs to move, assess access points and constraints, and build a detailed relocation plan. This plan includes a phase-by-phase timeline so you know exactly when each section of your factory will be operational again.</p>
                                </div>

                                <div>
                                    <h3>2. Disconnection and Preparation</h3>
                                    <p>Before any equipment leaves its foundation, our technicians safely disconnect power, utilities, and data lines. Each connection point is photographed and labeled for accurate reconnection at the destination.</p>
                                </div>

                                <div>
                                    <h3>3. Secure Packing and Loading</h3>
                                    <p>Delicate components are wrapped in anti-static materials, heavy machinery is strapped into custom cradles, and everything is loaded onto purpose-built vehicles using hydraulic systems that eliminate manual lifting risks.</p>
                                </div>

                                <div>
                                    <h3>4. Transportation and Delivery</h3>
                                    <p>Our heavy-load fleet transports your equipment along pre-planned routes designed to minimize vibration and shock. You receive live tracking updates throughout the journey.</p>
                                </div>

                                <div>
                                    <h3>5. Reinstallation and Startup Support</h3>
                                    <p>Upon arrival, our team reinstalls equipment to manufacturer specifications, reconnects all services, and performs basic operational checks. We stay on-site until you're satisfied that everything is running correctly.</p>
                                </div>

                                <div class="services__details-content-inner-two">
                                    <div class="row gutter-24">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-loading-01.png"
                                                    alt="Factory equipment being carefully loaded onto transport vehicles"
                                                    title="Industrial Equipment Loading">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-loading-02.png"
                                                    alt="Industrial machinery being reinstalled at new factory location"
                                                    title="Machine Reinstallation">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>Industries We Serve</h2>
                                <ul>
                                    <li><strong>Automotive Manufacturing:</strong> Assembly line equipment, robotic arms, CNC centers, and quality testing stations.</li>
                                    <li><strong>Textile and Garment Units:</strong> High-speed looms, spinning machines, dyeing equipment, and finishing lines.</li>
                                    <li><strong>Pharmaceutical Production:</strong> Cleanroom systems, filling lines, lab equipment, and temperature-controlled storage.</li>
                                    <li><strong>Food Processing Plants:</strong> Large-scale ovens, refrigeration units, packaging lines, and hygiene-rated conveyors.</li>
                                    <li><strong>Plastic and Polymer Industries:</strong> Injection molding machines, extruders, cooling systems, and raw material handling.</li>
                                </ul>

                                <h2>Why Factories Choose Lucky Transporter</h2>
                                <ul>
                                    <li><strong>Minimal Production Disruption:</strong> Our phased approach lets you keep revenue-generating operations running longer while we handle the rest.</li>
                                    <li><strong>Risk-Free Relocation:</strong> Comprehensive transit coverage means you're protected against any unexpected damage during the move.</li>
                                    <li><strong>No Hidden Charges:</strong> The quote you receive includes everything—labor, transport, packing materials, and basic installation. No surprises on billing day.</li>
                                    <li><strong>Compliance and Safety:</strong> All moves follow strict occupational safety guidelines, and we carry full liability insurance for industrial operations.</li>
                                </ul>

                                <div class="services__details-benefit">
                                    <h2>Frequently Asked Questions</h2>
                                    <br>
                                    <div class="faq__wrap">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Q1: How do you minimize downtime during a factory relocation?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We use a phased relocation approach, moving non-critical equipment first while keeping your core production lines running as long as possible. This strategy typically reduces downtime by 40-60% compared to a full shutdown and move.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Q2: Can you handle sensitive precision machinery?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. We use vibration dampening materials, climate-controlled vehicles, and shock-absorbing mounting for sensitive equipment. Every piece is insured individually based on its replacement value.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Q3: Is my equipment insured during the move?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>All factory equipment is covered under our comprehensive transit insurance policy for the full declared value. We provide documentation of coverage before the move begins.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Q4: Do you handle the reinstallation and setup?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. Our technicians perform complete reinstallation including mechanical anchoring, utility connections, and basic operational testing. Your engineers handle fine calibration—that's outside our scope, but we get everything to that point.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Q5: How do you handle hazardous materials or chemicals?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We partner with licensed hazardous material handlers for any industrial chemicals, solvents, or regulated substances. These are identified during the survey phase and handled by certified specialists—never mixed with general freight.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Ready to Relocate Your Factory?</h2>
                                <p>A factory relocation doesn't have to mean weeks of lost production. With the right partner, it can be a well-planned transition that gets you back online faster than you expected. <strong>Lucky Transporter</strong> has the equipment, the team, and the track record to make it happen. Contact us today for a detailed assessment and customized relocation plan.</p>
                        </div>
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/factory-shifting.php" title="Factory Shifting Services">Factory Shifting</a>
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

        <?php include '../recent_blogs_section.php'; ?>


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
