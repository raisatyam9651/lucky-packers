<?php 
// This is a template for location pages.
// Variables needed: $city, $page_title, $page_description, $page_keywords, $local_areas (array)

include 'header.php'; 
?>
<!-- header-area-end -->

    <!-- main-area -->
    <main class="fix">

        <!-- slider-area -->
        <section class="slider__area">
            <div class="swiper-container slider__active-two">
                <div class="swiper-wrapper">

                    <!-- Slider 1: Trust & Experience -->
                    <div class="swiper-slide slider__single-two">
                        <div class="slider__bg-two" data-background="<?php echo $base_url; ?>assets/media/slider/hero-slider-01.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider__content-two">
                                        <span class="sub-title">11+ Years of Excellence in <?php echo $city; ?></span>
                                        <h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4">Best Movers and Packers in <?php echo $city; ?></h2>
                                    <p data-animation-in="fadeInUp" data-delay-in=".6">Over a decade of excellence in delivering secure and punctual moving services in <?php echo $city; ?>. Enjoy a seamless transition with our professional team handling every detail.</p>
                                        <div class="slider__btn-wrap">
                                            <a href="javascript:void(0);" class="btn get_a_free_quote" title="Get a Free Quote Now">Get a Free Quote
                                                <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="Arrow Icon">
                                            </a>
                                            <a href="./our-services/" class="btn border-btn" title="Explore Our Offerings">Explore Services
                                                <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="Arrow Icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider 2: Efficiency & Speed -->
                    <div class="swiper-slide slider__single-two">
                        <div class="slider__bg-two" data-background="<?php echo $base_url; ?>assets/media/slider/hero-slider-02.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider__content-two">
                                        <span class="sub-title">Fast, Reliable, Secure</span>
                                        <h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4">Reliable Shifting Solutions in <?php echo $city; ?></h2>
                                    <p data-animation-in="fadeInUp" data-delay-in=".6">Your items are treated with precision in <?php echo $city; ?>. Utilizing modern transport systems and skilled staff, we ensure rapid, organized, and protected relocation.</p>
                                        <div class="slider__btn-wrap">
                                            <a href="javascript:void(0);" class="btn get_a_free_quote" title="Get a Free Quote Now">Get a Free Quote
                                                <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="Arrow Icon">
                                            </a>
                                            <a href="./our-services/" class="btn border-btn" title="Explore Our Offerings">Explore Services
                                                <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="Arrow Icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- features-area -->
        <section class="features__area section-pb-0">
            <div class="container">
                <div class="features__item-wrap-two">
                    <div class="row justify-content-center gutter-24">
                        <!-- Feature 1: 24/7 Customer Support -->
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item">
                                <div class="features__icon">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <div class="features__content">
                                    <h2 class="title">24/7 Support in <?php echo $city; ?></h2>
                                    <p>Round-the-clock assistance to address all your queries & concerns in <?php echo $city; ?>.</p>
                                    <h2 class="number">01</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2: Nationwide Coverage -->
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item">
                                <div class="features__icon">
                                    <i class="fa-solid fa-map"></i>
                                </div>
                                <div class="features__content">
                                    <h2 class="title"><?php echo $city; ?> Wide Coverage</h2>
                                    <p>Extensive network across <?php echo $city; ?> to ensure seamless connectivity.</p>
                                    <h2 class="number">02</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3: Real-Time Tracking -->
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item">
                                <div class="features__icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="features__content">
                                    <h2 class="title">Real-Time Tracking</h2>
                                    <p>Track your shipments live and stay informed at every step in <?php echo $city; ?>.</p>
                                    <h2 class="number">03</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- about-area -->
        <section class="about__area-five section-p-60" style="padding-top: 30px;">
            <div class="container">
                <div class="row align-items-center justify-content-center gutter-24">
                    <!-- Image Section -->
                    <div class="col-lg-6 col-md-9">
                        <div class="about__img-five">
                            <img src="<?php echo $base_url; ?>assets/media/about/about-team.jpg" alt="Lucky Transporter Team" data-aos="fade-left" data-aos-delay="200">
                            <div class="about__clients-box about__clients-box-two" data-aos="fade-right" data-aos-delay="200">
                                <span class="title">Committed to Safe <?php echo $city; ?> Relocation</span>
                                <div class="counter__item">
                                    <div class="counter__icon">
                                        <i class="fa-solid fa-award"></i>
                                    </div>
                                    <div class="counter__content">
                                        <h2 class="count"><span class="counter-number">11</span>+ Years</h2>
                                        <p>Experience in <?php echo $city; ?></p>
                                    </div>
                                </div>
                                <div class="counter__item">
                                    <div class="counter__icon">
                                        <i class="fa-solid fa-person-dolly"></i>
                                    </div>
                                    <div class="counter__content">
                                        <h2 class="count"><span class="counter-number">22</span>K+</h2>
                                        <p>Moves in <?php echo $city; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="col-lg-6">
                        <div class="about__content-five">
                            <div class="section__title mb-10">
                              <span class="sub-title">// <?php echo strtoupper($city); ?>'S TRUSTED MOVERS</span>
                            <h2 class="title">Top Rated Packers and Movers in <?php echo $city; ?> for Over a Decade</h2>
                            <p>
                                Lucky Transporter stands as a leading brand in <?php echo $city; ?>'s logistics and shifting sector, committed to delivering high-quality moving assistance throughout the city and beyond. With more than ten years of expertise, our team has effectively supported numerous households and corporations in their transition processes in <?php echo $city; ?>. Our dedication to protection, speed, and client happiness has established us as a reliable partner for every variety of relocation requirement.
                            </p>
                            <div class="about__content-inner-three">
                                <div class="about__list-box about__list-box-five">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-check"></i>Expertise You Can Trust</li>
                                        <li><i class="flaticon-check"></i>Full <?php echo $city; ?> Coverage</li>
                                        <li><i class="flaticon-check"></i>Safe & On-Time Deliveries</li>
                                        <li><i class="flaticon-check"></i>Customer-Centric Approach</li>
                                    </ul>
                                </div>
                                <div class="about__list-wrap-two">
                                    <div class="about__list-item-two">
                                        <div class="icon">
                                            <i class="fa-solid fa-cart-flatbed-boxes"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Tailored Services</h4>
                                            <p>Customized relocation solutions in <?php echo $city; ?>.</p>
                                        </div>
                                    </div>
                                    <div class="about__list-item-two">
                                        <div class="icon">
                                            <i class="fa-solid fa-person-carry-box"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Secure Handling</h4>
                                            <p>Top-notch safety for your belongings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about__content-bottom-two">
                                <div class="about__author-two">
                                    <div class="content">
                                        <a href="./about-us.php" class="btn" title="Read More About us">Read More
                                            <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="Arrow Icon">
                                        </a>
                                    </div>
                                </div>
                                <div class="about__contact">
                                    <div class="icon">
                                        <i class="flaticon-telephone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Hotline Number</span>
                                        <a title="Call Lucky Transporter for Reliable Relocation Services" href="tel:+91 8003966646">+91 8003966646</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__shape-two">
                <img src="<?php echo $base_url; ?>assets/media/shape/dz-cargo-packers-about-featrus.webp" alt="Decorative Shape for About Section" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- about-area-end -->

        <article class="main-container__marquee">
            <div class="main-container__marquee-track">
                <div class="main-container__marquee-items">
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> 11+ Years of Trusted Service</span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Best Packers in <?php echo $city; ?></span>
                    <span class="main-container__marquee-item"><i class="fas fa-star"></i> Home & Office Relocation in <?php echo $city; ?></span>
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

        <!-- services-area -->
        <section class="services__area-four grey-bg section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section__title text-center mb-30">
                            <span class="sub-title">// <?php echo strtoupper($city); ?> SERVICES</span>
                            <h2 class="title">Professional Moving Solutions in <?php echo $city; ?></h2>
                            <p>
                                Our company offers a wide spectrum of shifting options in <?php echo $city; ?> designed to satisfy your specific demands. Whether handling home or business transitions to custom car shipping and global moving, our professional staff guarantees a flawless and easy journey in <?php echo $city; ?> always.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gutter-24 justify-content-center">
                    <!-- Service 1: Household Relocation -->
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__thumb-three">
                                <a href="./our-services/home-shifting.php" title="Household Relocation Services in <?php echo $city; ?>">
                                    <img src="<?php echo $base_url; ?>assets/media/services/household-relocation.jpg" alt="Household Relocation Services">
                                </a>
                            </div>
                            <div class="services__content-three">
                                <div class="services__icon-three">
                                    <i class="fa-solid fa-person-dolly"></i>
                                </div>
                                <h4 class="title">
                                    <a href="./our-services/home-shifting.php" title="Home Shifting in <?php echo $city; ?>">Household Relocation</a>
                                </h4>
                                <p>Our team ensures safe and efficient packing, transportation, and delivery of all household items in <?php echo $city; ?>, making your home shifting process stress-free.</p>
                                <p style="margin-top: 10px;"><a href="./our-services/home-shifting.php">Read More >></a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Office Shifting -->
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__thumb-three">
                                <a href="./our-services/office-shifting.php" title="Office Shifting Services in <?php echo $city; ?>">
                                    <img src="<?php echo $base_url; ?>assets/media/services/office-shifting.jpg" alt="Office Shifting Services">
                                </a>
                            </div>
                            <div class="services__content-three">
                                <div class="services__icon-three">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                                <h4 class="title">
                                    <a href="./our-services/office-shifting.php" title="Office Shifting in <?php echo $city; ?>">Office Shifting</a>
                                </h4>
                                <p>Minimize downtime and ensure your office relocation in <?php echo $city; ?> is completed swiftly and securely with our expert handling of office equipment.</p>
                                <p style="margin-top: 10px;"><a href="./our-services/office-shifting.php">Read More >></a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: International Relocation -->
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__thumb-three">
                                <a href="./our-services/international-relocation.php" title="International Relocation from <?php echo $city; ?>">
                                    <img src="<?php echo $base_url; ?>assets/media/services/international-relocation.jpg" alt="International Relocation Services">
                                </a>
                            </div>
                            <div class="services__content-three">
                                <div class="services__icon-three">
                                    <i class="fa-solid fa-plane-circle-check"></i>
                                </div>
                                <h4 class="title">
                                    <a href="./our-services/international-relocation.php" title="International Shifting from <?php echo $city; ?>">International Relocation</a>
                                </h4>
                                <p>Our cross-border relocation services provide seamless support for moving internationally from <?php echo $city; ?>, with secure transportation and customs clearance.</p>
                                <p style="margin-top: 10px;"><a href="./our-services/international-relocation.php">Read More >></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

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
        <!-- counter-area-end -->

        <!-- why choose us area -->
        <section class="project__area-four grey-bg section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section__title text-center mb-30">
                            <span class="sub-title">// Why Choose Us in <?php echo $city; ?></span>
                            <h2 class="title">Delivering Excellence with Every <?php echo $city; ?> Move</h2>
                            <p>
                                At Lucky Transporter, we take pride in offering reliable, safe, and efficient relocation services in <?php echo $city; ?>. With over 11 years of experience, our specialized workers ensure that every move in <?php echo $city; ?>, whether residential, commercial, or automotive, is trouble-free.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gutter-24">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-two">
                            <div class="services__item-top">
                                <div class="services__icon-two">
                                    <i class="fa-solid fa-truck-fast"></i>
                                </div>
                            </div>
                            <h2 class="services__item-top_title">Fast <?php echo $city; ?> Delivery</h2>
                            <div class="services__content-two">
                                <p>Enjoy seamless and on-time delivery tailored to meet your <?php echo $city; ?> deadlines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-two">
                            <div class="services__item-top">
                                <div class="services__icon-two">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                            </div>
                            <h2 class="services__item-top_title">Expert Movers</h2>
                            <div class="services__content-two">
                                <p>Trust in our decade-long experience and unmatched <?php echo $city; ?> relocation expertise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-two">
                            <div class="services__item-top">
                                <div class="services__icon-two">
                                    <i class="fa-solid fa-box-open"></i>
                                </div>
                            </div>
                            <h2 class="services__item-top_title">Careful Handling</h2>
                            <div class="services__content-two">
                                <p>Your belongings are handled with utmost care in <?php echo $city; ?>, ensuring safety.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-two">
                            <div class="services__item-top">
                                <div class="services__icon-two">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                            </div>
                            <h2 class="services__item-top_title">24/7 Support</h2>
                            <div class="services__content-two">
                                <p>Get assistance anytime with our dedicated round-the-clock support in <?php echo $city; ?>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CITY LOCATIONS SECTION -->
        <section class="location__area section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">// OUR NETWORK</span>
                            <h2 class="title">Our Service Areas in <?php echo $city; ?></h2>
                            <p>We provide comprehensive packing and moving services across all major sectors and neighborhoods of <?php echo $city; ?>.</p>
                        </div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <div class="list-group">
                                        <?php 
                                        $half = ceil(count($local_areas) / 2);
                                        for($i=0; $i<$half; $i++) {
                                            echo '<div class="list-group-item list-group-item-action">Packers & Movers in ' . $local_areas[$i] . ' ' . $city . '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <div class="list-group">
                                        <?php 
                                        for($i=$half; $i<count($local_areas); $i++) {
                                            echo '<div class="list-group-item list-group-item-action">Packers & Movers in ' . $local_areas[$i] . ' ' . $city . '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq-area -->
        <section class="faq__area-two section-p-60 grey-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq__content">
                            <div class="section__title mb-30">
                                <span class="sub-title">// <?php echo strtoupper($city); ?> PACKERS FAQ'S</span>
                                <h2 class="title">Common Questions About <?php echo $city; ?> Relocation</h2>
                            </div>
                            <div class="faq__wrap-three">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                How much do packers and movers in <?php echo $city; ?> charge?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Charges depend on the volume of goods, packing material quality, and the distance. Local <?php echo $city; ?> shifts typically range from ₹3,000 to ₹15,000 depending on home size.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Do you provide insurance for local <?php echo $city; ?> shifts?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, we provide comprehensive goods insurance for both local and inter-city moves to ensure complete peace of mind.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How soon can I book a move in <?php echo $city; ?>?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We recommend booking at least 2-3 days in advance, but we also handle urgent last-minute moves based on availability.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="container">
                            <div class="request__wrap-two" style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
                                <div class="section__title mb-20">
                                    <span class="sub-title">// <?php echo strtoupper($city); ?> QUOTE</span>
                                    <h2 class="title">Get A Free Quote in <?php echo $city; ?>!</h2>
                                </div>
                                <form action="javascript:void(0);" id="get_a_quote_form_<?php echo strtolower(str_replace(' ', '_', $city)); ?>" class="request__form-three">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-grp">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-grp">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-grp">
                                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn w-100">Get Free Quote Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php include 'footer.php'; ?>
