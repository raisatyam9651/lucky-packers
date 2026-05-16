<?php $base_url = '../'; include '../header.php'; ?>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-packing.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Unpacking and Escort</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" style="color: #fff;">Our Services</span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Unpacking and Escort</span>
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
                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-packing-main.png"
                                    alt="Professional Unpacking and Escort Services by Lucky Transporter"
                                    title="Safe and Stress-Free Unpacking Solutions">
                            </div>

                            <div class="services__details-content">
                                <h1 class="title">Unpacking and Setup That Gets You Living in Your New Space Faster</h1>
                                <p>The boxes are delivered. The hard part's over, right? Not quite. Unpacking is where most moves fall apart—it's time-consuming, tedious, and suddenly you're living out of suitcases for two weeks because there's always something more urgent to do.</p>

                                <p>Lucky Transporter's unpacking service handles the entire post-move setup: opening boxes, placing items in their rooms, assembling furniture, connecting appliances, and cleaning up the packing debris. You move in ready to live, not ready to spend your weekend fighting with instruction manuals.</p>

                                <h2>What Unpacking Service Covers</h2>
                                <p>We don't just empty boxes—we make your new space functional:</p>
                                <ul>
                                    <li><strong>Room-by-Room Unpacking</strong> — Kitchen items in the kitchen, bedroom items in the bedroom. We follow your priorities for which rooms to set up first.</li>
                                    <li><strong>Furniture Assembly</strong> — Beds, tables, wardrobes, shelving units. All the flatpack and partially assembled furniture that arrived in pieces.</li>
                                    <li><strong>Appliance Setup</strong> — Washing machines, refrigerators, TVs, microwaves. We position and connect them so they're ready to use.</li>
                                    <li><strong>Debris Removal</strong> — All boxes, packing paper, bubble wrap, and packing materials hauled away after setup is complete.</li>
                                    <li><strong>Basic Organization</strong> — Wardrobe hanging, drawer arrangement, kitchen cabinet setup. Not full Marie Kondo, but functional.</li>
                                </ul>

                                <h2>How We Handle Unpacking</h2>

                                <div>
                                    <h3>Step 1: Walkthrough and Priority Setting</h3>
                                    <p>On arrival, we walk through the space with you. You tell us what's essential for day one—usually the kitchen and master bedroom—and we work from there. No assumptions about what goes where.</p>
                                </div>

                                <div>
                                    <h3>Step 2: Systematic Unpacking</h3>
                                    <p>We unpack room by room, not box by box. Each room's items are consolidated from multiple boxes before we start placing, so nothing gets lost in the wrong room.</p>
                                </div>

                                <div>
                                    <h3>Step 3: Assembly and Setup</h3>
                                    <p>Furniture gets assembled, appliances get positioned and connected, and basic organization happens—drawers lined, wardrobes arranged, kitchen items accessible. Not fully organized, but usable.</p>
                                </div>

                                <div>
                                    <h3>Step 4: Cleanup and Walkthrough</h3>
                                    <p>Packing materials are bundled and removed. We do a final walkthrough with you to confirm everything is where you want it. Adjustments happen on the spot.</p>
                                </div>

                                <div class="services__details-content-inner-two">
                                    <div class="row gutter-24">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-packing-01.png"
                                                    alt="Professional Unpacking Team"
                                                    title="Systematic Unpacking Process">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-packing-02.png"
                                                    alt="Setting up furniture in new home"
                                                    title="Complete Setup Assistance">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>What the Escort Service Covers</h2>
                                <p>For high-value or sensitive shipments, we offer escort service—a dedicated handler who travels with your consignment from origin to destination. This means:</p>
                                <ul>
                                    <li><strong>Dedicated Supervision</strong> — One person responsible for your goods throughout the journey, not just loading and unloading.</li>
                                    <li><strong>Real-Time Updates</strong> — Direct communication from the escort handler about transit status, delays, and ETA changes.</li>
                                    <li><strong>Enhanced Security</strong> — Physical presence with your goods at all times, not just GPS tracking.</li>
                                    <li><strong>Special Handling</strong> — Fragile items, valuable goods, or sensitive equipment get the focused attention they need.</li>
                                </ul>

                                <h2>Why Add Unpacking to Your Move</h2>
                                <ol>
                                    <li><strong>Time Back in Your Day</strong> — Professional unpacking takes hours for you, minutes for us. That time is better spent on work, family, or just recovering from the move.</li>
                                    <li><strong>Nothing Lost in the Chaos</strong> — Items unpacked systematically don't end up in the wrong room or misplaced in storage. We track what came from where.</li>
                                    <li><strong>Less Day-One Stress</strong> — Walking into a set-up home instead of a maze of boxes changes how the move feels. It actually feels like home sooner.</li>
                                    <li><strong>Proper Disposal</strong> — Packing waste disposed of responsibly, not sitting in your new home waiting for you to deal with it.</li>
                                </ol>

                                <div class="services__details-benefit">
                                    <h2>Common Questions About Unpacking</h2>
                                    <br>
                                    <div class="faq__wrap">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What's included in unpacking service?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We open boxes, unpack items into their designated rooms, assemble furniture, connect basic appliances, and remove all packing debris. We don't do deep cleaning or full home organization—we make your space functional enough to live in.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Can I choose which rooms to prioritize?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. Tell us what you need first—most people prioritize the kitchen and master bedroom. We work through your priorities in order.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Do you handle fragile or valuable items differently?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. Fragile items get extra attention during unpacking—delicate glassware, electronics, artwork. We unpack these items first and place them where you indicate before moving to other rooms.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        When can unpacking be scheduled?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Same day as delivery or the day after—your choice. We can schedule unpacking to align with your move-in time so we're not starting before you're ready to be there.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        What's the difference between escort and standard tracking?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Standard tracking is GPS-based—location updates. Escort service means a dedicated person travels with your shipment. They can make handling decisions during transit, provide immediate updates, and are accountable for the goods throughout. Useful for high-value or sensitive shipments.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Move In Ready to Live</h2>
                                <p>Lucky Transporter's unpacking service bridges the gap between "delivery day" and "home." We handle the tedious post-move work so you're not living out of boxes for weeks. Add escort service for peace of mind on sensitive or valuable shipments. Contact us to schedule unpacking along with your move.</p>
                            </div>
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/unpacking-and-escort.php" title="Unpacking and Escort Services">Unpacking and Escort</a>
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
