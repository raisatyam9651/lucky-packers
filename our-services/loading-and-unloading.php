<?php $base_url = '../'; include '../header.php'; ?>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-transportation.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Loading and Unloading</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" style="color: #fff;">Our Services</span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Loading and Unloading</span>
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/loading-and-unloading.php" title="Loading and Unloading Services">Loading and Unloading</a>
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
                                    <div class="sidebar__shape" style="background-image: url('assets/media/bg/dz-cargo-packers-service-slidebar.webp');">
                                    </div>
                                </div>

                            </aside>
                        </div>
                        <div class="col-lg-8">
                            <div class="services__details-thumb">
                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-transport-main.png"
                                    alt="Professional Loading and Unloading Services by Lucky Transporter"
                                    title="Safe Loading and Unloading Solutions">
                            </div>

                            <div class="services__details-content">
                                <h1 class="title">Loading and Unloading That Protects Your Goods from Doorstep to Destination</h1>
                                <p>The way your belongings are loaded and unloaded matters more than most people realize. A poorly loaded truck can turn a short relocation into a broken furniture nightmare—even if everything was packed perfectly. At <strong>Lucky Transporter</strong>, loading and unloading isn't just a step in our process; it's a specialized skill we've refined over thousands of moves.</p>

                                <p>Our crews understand weight distribution, securing techniques, and sequence—the difference between an item arriving in one piece or arriving damaged often comes down to decisions made during loading. We treat every item, heavy or fragile, with the same level of care because we know how much each piece means to you.</p>

                                <h2>How Our Loading and Unloading Service Works</h2>

                                <div>
                                    <h3>1. Assessment Before Touching Anything</h3>
                                    <p>We evaluate your items before lifting a single box. This gives us the right crew size, the correct equipment, and a plan for how everything loads onto the vehicle—heavy pieces where, fragile items placed how. It takes 15 minutes and prevents problems all day.</p>
                                </div>

                                <div>
                                    <h3>2. Right Equipment for Every Item</h3>
                                    <p>No one lifts a washing machine by hand when a hand truck exists. We arrive with furniture sliders, dollies, ramps, moving blankets, and straps. For items above a certain weight, we use hydraulic equipment to lift safely without risking back injuries or floor damage.</p>
                                </div>

                                <div>
                                    <h3>3. Loading Sequence</h3>
                                    <p>We load in a deliberate order: heaviest and largest items first along the walls, medium items in the center, and fragile or priority items last—loaded closest to the cab so they come out first at the destination. Everything is strapped or blocked to prevent shifting during transit.</p>
                                </div>

                                <div>
                                    <h3>4. Secure Transit</h3>
                                    <p>Loaded vehicles are checked before departure. Items are re-secured if needed at any rest stops during long-distance moves. Our drivers are trained to avoid sudden braking and sharp turns that could damage loosely packed loads.</p>
                                </div>

                                <div>
                                    <h3>5. Systematic Unloading</h3>
                                    <p>At your destination, we unload in reverse order—fragile items first, placed in their designated rooms immediately. Furniture goes where you want it, not where it's convenient for us. We don't leave until everything is placed and you're satisfied.</p>
                                </div>

                                <div class="services__details-content-inner-two">
                                    <div class="row gutter-24">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-transport-01.png"
                                                    alt="Loading crew using proper equipment to safely load heavy furniture"
                                                    title="Safe Loading Practices">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="services__details-inner-img">
                                                <img src="<?php echo $base_url; ?>assets/media/services/lc-packers-transport-02.png"
                                                    alt="Organized unloading with items placed in designated rooms"
                                                    title="Room Placement">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>What We Load and Unload</h2>
                                <ul>
                                    <li><strong>Household Furniture:</strong> Beds, sofas, wardrobes, dining sets, and modular furniture—all handled with blankets and proper lifting techniques.</li>
                                    <li><strong>Fragile and High-Value Items:</strong> Artwork, mirrors, antiques, glass furniture, and expensive electronics loaded last and offloaded first.</li>
                                    <li><strong>Heavy Appliances:</strong> Refrigerators, washing machines, AC units, and industrial-grade equipment moved with appropriate mechanical aids.</li>
                                    <li><strong>Office and IT Equipment:</strong> Workstations, server racks, printers, and copiers—loaded to minimize vibration and physical stress during transit.</li>
                                    <li><strong>Vehicles:</strong> Cars and bikes loaded onto specialized ramps and secured for transport.</li>
                                </ul>

                                <h2>Equipment We Use</h2>
                                <ul>
                                    <li><strong>Hand Trucks and Dollies:</strong> For heavy appliances and large boxes.</li>
                                    <li><strong>Furniture Sliders and Moving Blankets:</strong> For hardwood floors and polished surfaces that scratch easily.</li>
                                    <li><strong>Hydraulic Lifts and Ramps:</strong> For ground-floor and basement access without stairs.</li>
                                    <li><strong>Heavy-Duty Straps and Tie-Downs:</strong> To secure items inside the vehicle during transit.</li>
                                </ul>

                                <h2>Why Book Just Loading and Unloading</h2>
                                <p>Not everyone needs full packing and moving service. If you've already packed everything yourself or you're only moving items from one floor to another in the same building, you might only need the labor. Our loading and unloading service works standalone—you handle the transport, we handle the heavy lifting.</p>

                                <div class="services__details-benefit">
                                    <h2>Frequently Asked Questions</h2>
                                    <br>
                                    <div class="faq__wrap">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Q1: Do you bring your own equipment?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. We arrive with hand trucks, dollies, furniture sliders, moving blankets, straps, and ramps. You don't need to arrange anything—we bring everything needed for the job.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Q2: How do you handle fragile items during loading?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Fragile items are wrapped in moving blankets and loaded last. In the vehicle, they're positioned on top of stable items and away from walls where impact could occur. At delivery, they come off the truck first.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Q3: Can you place items in specific rooms?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. Tell us which room each box or item belongs in during booking or at delivery. Our crew will place everything accordingly—beds in bedrooms, sofas in the living room, and so on.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Q4: How long does loading and unloading take?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>For a typical 2-3 bedroom home, loading takes 2-3 hours and unloading takes 1-2 hours. Larger homes or commercial moves take proportionally longer. We give you a time estimate during booking.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Q5: Is there insurance if something gets damaged?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Yes. All items handled by our crew are covered under our transit liability policy. Damage claims are processed directly with our team—no third-party insurance runaround. Report any damage at the time of delivery.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Book Loading and Unloading</h2>
                                <p>Whether you need a crew for a full home move or just a few hours of help shifting heavy furniture downstairs, <strong>Lucky Transporter</strong> has the team and equipment to do it safely. Contact us for same-day or advance booking.</p>
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
                                                <a class="active" href="<?php echo $base_url; ?>our-services/loading-and-unloading.php" title="Loading and Unloading Services">Loading and Unloading</a>
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
                                    <div class="sidebar__shape" style="background-image: url('assets/media/bg/dz-cargo-packers-service-slidebar.webp');">
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
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client01.webp"
                                        alt="Client 1 Logo | Trusted by Lucky Transporter"
                                        title="Client 1 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client02.webp"
                                        alt="Client 2 Logo | Trusted by Lucky Transporter"
                                        title="Client 2 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client03.webp"
                                        alt="Client 3 Logo | Trusted by Lucky Transporter"
                                        title="Client 3 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client04.webp"
                                        alt="Client 4 Logo | Trusted by Lucky Transporter"
                                        title="Client 4 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client05.webp"
                                        alt="Client 5 Logo | Trusted by Lucky Transporter"
                                        title="Client 5 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client06.webp"
                                        alt="Client 6 Logo | Trusted by Lucky Transporter"
                                        title="Client 6 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client07.webp"
                                        alt="Client 7 Logo | Trusted by Lucky Transporter"
                                        title="Client 7 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client08.webp"
                                        alt="Client 8 Logo | Trusted by Lucky Transporter"
                                        title="Client 8 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client09.webp"
                                        alt="Client 9 Logo | Trusted by Lucky Transporter"
                                        title="Client 9 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client10.webp"
                                        alt="Client 10 Logo | Trusted by Lucky Transporter"
                                        title="Client 10 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client11.webp"
                                        alt="Client 11 Logo | Trusted by Lucky Transporter"
                                        title="Client 11 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client12.webp"
                                        alt="Client 12 Logo | Trusted by Lucky Transporter"
                                        title="Client 12 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                                    <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="<?php echo $base_url; ?>assets/media/clients/client13.webp"
                                        alt="Client 13 Logo | Trusted by Lucky Transporter"
                                        title="Client 13 | Partner of Lucky Transporter">
                                </div>
                            </div>
                                            </div>
                </div>
            </div>
        </section>
        <!-- client area end -->

    </main>
    <!-- main-area-end -->
<?php include '../footer.php'; ?>
