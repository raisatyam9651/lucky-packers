<?php $base_url = '../'; include '../header.php'; ?>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-loading.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Hotel Shifting</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" style="color: #fff;">Our Services</span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Hotel Shifting</span>
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/hotel-shifting.php" title="Hotel Shifting Services">Hotel Shifting</a>
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
                        <div class="col-lg-8">
                            <div class="services__details-thumb">
                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-loading-main.png"
                                    alt="Professional Hotel Shifting Services by Lucky Transporter"
                                    title="Seamless Hospitality Relocation Solutions">
                            </div>

                            <div class="services__details-content">
                                <h1 class="title">Hotel Shifting That Minimizes Guest Disruption and Property Damage</h1>
                                <p>Moving a hotel isn’t like moving an office or a home. Every hour of downtime means lost bookings, angry guests, and revenue that doesn’t come back. At <strong>Lucky Transporter</strong>, we’ve handled hotel relocations ranging from 20-room boutique properties to 200-room resort complexes, and we’ve learned that speed and care aren’t opposites—they’re both achievable when you plan properly.</p>

                                <p>Hospitality relocations require managing hundreds of room items, restaurant equipment, lobby furniture, and operational gear simultaneously. Our team treats each category differently—breakfast area glassware doesn’t travel the same way as heavy kitchen equipment, and guest room mattresses need different protection than lobby artwork. We know the difference, and that attention to detail is what keeps your assets safe.</p>

                                <h2>What Sets Hotel Relocations Apart</h2>
                                <ul>
                                    <li><strong>Scale and Volume:</strong> A 100-room hotel might mean 500+ pieces of furniture, hundreds of kilograms of kitchen equipment, and thousands of individual items to track. We manage this with detailed inventories, not guesswork.</li>
                                    <li><strong>Operational Timing:</strong> We work around your check-out schedules, planning packing after rooms are cleared and unpacking in guest-ready order.</li>
                                    <li><strong>Specialized FF&E Handling:</strong> Furniture, fixtures, and equipment in hospitality settings are often custom-built or high-end. Our teams are trained to handle each type with appropriate techniques and materials.</li>
                                    <li><strong>Discrete Operations:</strong> Hotel moves often happen while parts of the property are still operating. We work in designated zones to avoid disrupting ongoing guest services.</li>
                                    <li><strong>Asset Protection:</strong> Your reputation depends on the condition of your property. We carry full insurance coverage for all FF&E items during packing, transit, and setup.</li>
                                </ul>

                                <h2>How We Handle Hotel Relocations</h2>

                                <div>
                                    <h3>1. Pre-Move Inventory and Categorization</h3>
                                    <p>Every item is cataloged by location—room number, floor, or functional area. High-value and fragile pieces are flagged for specialized packing. This inventory becomes your delivery checklist, so nothing goes missing between sites.</p>
                                </div>

                                <div>
                                    <h3>2. Room-by-Room Packing</h3>
                                    <p>We pack systematically, starting with back-of-house areas like storage and kitchens before moving to guest floors. Each room’s contents stay grouped so unpacking at the destination follows a logical room-by-room sequence.</p>
                                </div>

                                <div>
                                    <h3>3. Commercial Equipment Handling</h3>
                                    <p>Kitchen gear, refrigeration units, and bar equipment are disconnected by our team, protected with custom padding, and loaded onto heavy-load vehicles. These items travel separately from general furnishings.</p>
                                </div>

                                <div>
                                    <h3>4. GPS-Tracked Transportation</h3>
                                    <p>Your assets move in GPS-equipped vehicles along pre-planned routes. You can check shipment status at any time—a feature hotel managers consistently tell us they appreciate.</p>
                                </div>

                                <div>
                                    <h3>5. Installation and Guest-Ready Setup</h3>
                                    <p>At the destination, furniture is placed per your floor plan, kitchen equipment is reconnected, and rooms are arranged to brand standards. We don’t leave until the property is operational.</p>
                                </div>

                                <div class="services__details-content-inner-two">
                                    <div class="row gutter-24">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-loading-01.png"
                                                    alt="Hotel furniture being carefully packed and organized for relocation"
                                                    title="Hotel Furniture Packing">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-loading-02.png"
                                                    alt="Professional hotel equipment setup at new property location"
                                                    title="Hotel Setup">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>What We Move</h2>
                                <ul>
                                    <li><strong>Guest Room Furniture:</strong> Beds, nightstands, wardrobes, desks, TVs, and seating.</li>
                                    <li><strong>Lobby and Common Areas:</strong> Reception desks, lounge furniture, artwork, signage, and plant displays.</li>
                                    <li><strong>Kitchen and F&B Equipment:</strong> Commercial ovens, refrigeration, food warmers, dishwashers, and serving counters.</li>
                                    <li><strong>Back-of-House Items:</strong> Office furniture, linen stores, maintenance equipment, and operational supplies.</li>
                                    <li><strong>Specialty Items:</strong> Spa equipment, gym gear, pool furniture, and outdoor fixtures.</li>
                                </ul>

                                <h2>Why Hotel Owners Choose Us</h2>
                                <ul>
                                    <li><strong>Existing Hotel Clients:</strong> We’ve completed hotel moves for properties across India and understand the operational constraints of a live hospitality business.</li>
                                    <li><strong>No Damage Track Record:</strong> Our FF&E move damage rate is under 0.5%—something we maintain by using proper materials and trained handlers for each asset category.</li>
                                    <li><strong>Flexible Scheduling:</strong> We work overnight, in phases, or around your seasonal peaks—whatever timeline fits your property’s operating calendar.</li>
                                    <li><strong>Full Liability Coverage:</strong> Every item is covered under our comprehensive transit policy for its declared replacement value.</li>
                                </ul>

                                <div class="services__details-benefit">
                                    <h2>Frequently Asked Questions</h2>
                                    <br>
                                    <div class="faq__wrap">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Q1: How long does a complete hotel relocation take?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>It depends on the property size and move distance. A 50-room hotel within the same city can often complete in 3-5 days. Larger properties or intercity moves typically run 7-14 days. We provide a detailed phase plan during the initial survey.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Q2: Can you handle commercial kitchen equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. Our kitchen move teams are experienced with commercial-grade equipment—walk-in coolers, industrial ovens, combi steamers, and bar installations. These require specialized disconnection, crating, and reinstallation support.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Q3: How is our FF&E insured during the move?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Every item is covered under our comprehensive hospitality transit policy based on declared replacement values. We provide the coverage certificate before packing begins, and claims are processed directly through our team.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Q4: Can we relocate in phases while keeping the hotel partially open?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Absolutely. Many hotel moves happen in phases—one floor at a time, or back-of-house first and guest floors later. We plan the phases with your operations team to minimize guest impact.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Q5: Do you handle art, mirrors, and fragile décor items?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. Each fragile piece gets a custom crate or protective wrap depending on size and vulnerability. Artwork and mirrors are padded, custom-boxed, and loaded with glass-side protection to prevent any transit damage.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Let’s Plan Your Hotel Move</h2>
                                <p>A hotel relocation is a complex logistics project, but it doesn’t have to disrupt your business. <strong>Lucky Transporter</strong> has the fleet, the team, and the hospitality experience to execute a move that gets your property back to full operation fast. Contact us for a site survey and detailed proposal.</p>
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/hotel-shifting.php" title="Hotel Shifting Services">Hotel Shifting</a>
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
