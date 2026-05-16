<?php 
$page_title = 'Our Network | Lucky Transporter - Packers and Movers Across India';
$page_description = 'Lucky Transporter provides reliable packers and movers services across all major cities in India, including Delhi, Noida, Gurgaon, Mumbai, Bangalore, and more.';
$page_keywords = 'packers and movers network, movers in india, luck transporter locations, delhi, noida, gurgaon, mumbai, bangalore';
include 'header.php'; 
?>

    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-packing.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Our Network</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Our Network</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- network-area -->
        <section class="services__area-four section-p-60 grey-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">// NATIONWIDE PRESENCE</span>
                            <h2 class="title">Our Service Network Across India</h2>
                            <p>
                                With over a decade of excellence, Lucky Transporter has established a robust logistics infrastructure across the country. From metropolitan hubs to growing industrial centers, we bring professional relocation services to your doorstep.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gutter-24">
                    <?php 
                    $cities = [
                        ["name" => "Delhi", "icon" => "fa-solid fa-fort-awesome"],
                        ["name" => "Noida", "icon" => "fa-solid fa-city"],
                        ["name" => "Gurgaon", "icon" => "fa-solid fa-building-columns"],
                        ["name" => "Faridabad", "icon" => "fa-solid fa-industry"],
                        ["name" => "Ghaziabad", "icon" => "fa-solid fa-house-chimney-window"],
                        ["name" => "Mumbai", "icon" => "fa-solid fa-bridge"],
                        ["name" => "Pune", "icon" => "fa-solid fa-mountain-city"],
                        ["name" => "Bangalore", "icon" => "fa-solid fa-microchip"],
                        ["name" => "Hyderabad", "icon" => "fa-solid fa-mosque"],
                        ["name" => "Kolkata", "icon" => "fa-solid fa-monument"],
                        ["name" => "Chandigarh", "icon" => "fa-solid fa-tree-city"],
                        ["name" => "Punjab", "icon" => "fa-solid fa-wheat-awn"],
                        ["name" => "Rajasthan", "icon" => "fa-solid fa-camel"],
                        ["name" => "Gujarat", "icon" => "fa-solid fa-ship"],
                        ["name" => "Surat", "icon" => "fa-solid fa-gem"],
                        ["name" => "Indore", "icon" => "fa-solid fa-temple"],
                        ["name" => "Nashik", "icon" => "fa-solid fa-wine-glass"],
                        ["name" => "Meerut", "icon" => "fa-solid fa-clock"],
                        ["name" => "Haridwar", "icon" => "fa-solid fa-water"],
                        ["name" => "Dehradun", "icon" => "fa-solid fa-mountain-sun"]
                    ];
                    
                    foreach($cities as $city_data): 
                        $city = $city_data['name'];
                        $icon = $city_data['icon'];
                        $slug = "movers-and-packers-in-" . strtolower(str_replace(' ', '-', $city)) . ".php";
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="services__item-three" style="padding: 30px 20px; transition: all 0.3s ease; border: 1px solid #eee;">
                            <div class="services__icon-three" style="margin-bottom: 20px; width: 60px; height: 60px; line-height: 60px; font-size: 24px; background: #f9f9f9; color: #e11c24; border-radius: 50%; display: inline-block;">
                                <i class="<?php echo $icon; ?>"></i>
                            </div>
                            <h4 class="title" style="font-size: 18px; margin-bottom: 15px;">
                                <a href="<?php echo $base_url . $slug; ?>" title="Professional Movers and Packers in <?php echo $city; ?>">
                                    <?php echo $city; ?>
                                </a>
                            </h4>
                            <p style="font-size: 14px; color: #666; margin-bottom: 25px;">Top-rated home and office shifting services in <?php echo $city; ?>.</p>
                            <a href="<?php echo $base_url . $slug; ?>" class="btn" style="padding: 10px 20px; font-size: 11px; letter-spacing: 1px; border-radius: 5px; height: auto; line-height: 1;">
                                VIEW SERVICE AREAS <i class="fa-solid fa-arrow-right-long" style="margin-left: 8px;"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- network-area-end -->

        <!-- cta-area -->
        <section class="cta__area-two section-p-60" style="background: #e11c24;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta__content-two">
                            <h2 class="title" style="color: #fff; margin-bottom: 0;">Moving to a city not listed here?</h2>
                            <p style="color: rgba(255,255,255,0.8); margin-top: 10px; margin-bottom: 0;">We offer Pan-India relocation services. Contact us for a custom quote for any location in India.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="<?php echo $base_url; ?>contact-us.php" class="btn border-btn" style="border-color: #fff; color: #fff;">Get A Custom Quote</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->

    </main>

<?php include 'footer.php'; ?>
