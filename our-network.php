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
        <section class="services__area-four section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">// OUR COVERAGE</span>
                            <h2 class="title">Serving All Major Cities Across India</h2>
                            <p>
                                Lucky Transporter has a vast network of offices and partners across India. We ensure a seamless relocation experience no matter where you are moving from or to.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gutter-24">
                    <?php 
                    $cities = [
                        "Delhi", "Noida", "Gurgaon", "Faridabad", "Ghaziabad", 
                        "Mumbai", "Pune", "Bangalore", "Hyderabad", "Kolkata", 
                        "Chandigarh", "Punjab", "Rajasthan", "Gujarat", "Surat", 
                        "Indore", "Nashik", "Meerut", "Haridwar", "Dehradun"
                    ];
                    foreach($cities as $city): 
                        $slug = "movers-and-packers-in-" . strtolower(str_replace(' ', '-', $city)) . ".php";
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item-three" style="padding: 20px; text-align: center;">
                            <h4 class="title" style="margin-bottom: 0;">
                                <a href="<?php echo $base_url . $slug; ?>" title="Movers and Packers in <?php echo $city; ?>">
                                    Packers & Movers in <?php echo $city; ?>
                                </a>
                            </h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- network-area-end -->

    </main>

<?php include 'footer.php'; ?>
