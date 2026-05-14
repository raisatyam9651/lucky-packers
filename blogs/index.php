<?php $base_url = '../'; include '../header.php'; ?>

    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-transport.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Our Blogs</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Our Blogs</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog__post-area-three section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title" style="color: #0A4D68; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">// DISCOVER EXPERT RELOCATION INSIGHTS</span>
                            <h2 class="title" style="font-weight: 800; font-size: 36px; margin-top: 10px;">Your Trusted Resource For Moving Tips And Industry Updates</h2>
                            <p style="max-width: 900px; margin: 20px auto 0;">Welcome to <strong>Lucky Transporter Pvt. Ltd.</strong> blog – here is your resource for the relocation and logistics tips from professionals. We have more than 11 years experience and we can provide you with helpful tips, instructions, and news on how to move efficiently. From packing tips and selecting good movers to learning about international moving tips, you’ll find everything in our blogs. Stay updated, save money, and ensure an effortless move with help from the professionals. Start exploring today!</p>
                        </div>
                    </div>
                </div>

                <div class="row gutter-24">
                    <?php 
                    include '../blogs_data.php'; 
                    foreach ($blogs as $blog): 
                    ?>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog__post-item shine__animate-item" style="height: 100%; border: 1px solid #eee; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; background: #fff; transition: all 0.3s ease;">
                            <div class="blog__post-thumb" style="position: relative;">
                                <a href="<?php echo $blog['slug']; ?>" class="shine__animate-link">
                                    <img src="<?php echo $base_url . $blog['image']; ?>" alt="<?php echo $blog['title']; ?>" style="width: 100%; height: 220px; object-fit: cover;">
                                </a>
                            </div>
                            <div class="blog__post-content" style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                                <div class="blog__meta" style="margin-bottom: 15px; font-size: 14px; color: #666;">
                                    <span style="display: flex; align-items: center; gap: 8px;"><i class="fa-regular fa-calendar-days"></i> <?php echo $blog['date']; ?></span>
                                </div>
                                <h3 class="title" style="font-size: 18px; font-weight: 700; margin-bottom: 15px; line-height: 1.4;">
                                    <a href="<?php echo $blog['slug']; ?>" style="color: #000;"><?php echo $blog['title']; ?></a>
                                </h3>
                                <p style="font-size: 14px; line-height: 1.6; color: #555; flex-grow: 1; margin-bottom: 20px;"><?php echo $blog['excerpt']; ?></p>
                                <a href="<?php echo $blog['slug']; ?>" class="btn" style="border: 1px solid #ddd; padding: 8px 20px; border-radius: 5px; font-size: 14px; font-weight: 600; color: #0A4D68; width: fit-content;">
                                    Read More <i class="fa-solid fa-arrow-up-right" style="margin-left: 5px; font-size: 12px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination-wrap mt-50 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination list-wrap justify-content-center">
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);" style="background: #0A4D68; border-color: #0A4D68; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items:center; justify-content:center; color: #fff;">1</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- marquee-area -->
        <section class="marquee__area" style="background: #0A4D68; padding: 15px 0; overflow: hidden;">
            <div class="container-fluid p-0">
                <div class="marquee__wrapper" style="display: flex; white-space: nowrap; animation: marquee 30s linear infinite;">
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Custom Packing for Fragile Items
                    </div>
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Transparent Pricing Policy
                    </div>
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Fast & Secure Deliveries
                    </div>
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Personalized Moving Solutions
                    </div>
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Corporate Relocation
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Custom Packing for Fragile Items
                    </div>
                    <div class="marquee__item" style="color: #fff; font-weight: 700; font-size: 14px; margin-right: 50px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-star"></i> Transparent Pricing Policy
                    </div>
                </div>
            </div>
        </section>
        <!-- marquee-area-end -->

        <!-- brand-area -->
        <div class="brand__area section-p-60" style="background: #fff;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="brand__content text-center">
                            <div class="row justify-content-center align-items-center gutter-24" style="display: flex; flex-wrap: wrap; gap: 40px;">
                                <div style="width: 150px;"><img src="<?php echo $base_url; ?>assets/media/clients/client01.webp" alt="Kotak" style="width: 100%; filter: grayscale(1); opacity: 0.7;"></div>
                                <div style="width: 150px;"><img src="<?php echo $base_url; ?>assets/media/clients/client02.webp" alt="ICICI" style="width: 100%; filter: grayscale(1); opacity: 0.7;"></div>
                                <div style="width: 150px;"><img src="<?php echo $base_url; ?>assets/media/clients/client03.webp" alt="Yes Bank" style="width: 100%; filter: grayscale(1); opacity: 0.7;"></div>
                                <div style="width: 150px;"><img src="<?php echo $base_url; ?>assets/media/clients/client04.webp" alt="Pepsi" style="width: 100%; filter: grayscale(1); opacity: 0.7;"></div>
                                <div style="width: 150px;"><img src="<?php echo $base_url; ?>assets/media/clients/client05.webp" alt="Axis Bank" style="width: 100%; filter: grayscale(1); opacity: 0.7;"></div>
                                <div style="width: 150px;"><img src="<?php echo $base_url; ?>assets/media/clients/client06.webp" alt="Amazon" style="width: 100%; filter: grayscale(1); opacity: 0.7;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <style>
            @keyframes marquee {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); }
            }
            .blog__post-item:hover {
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                transform: translateY(-5px);
            }
            .blog__post-item {
                transition: all 0.3s ease;
            }
        </style>

    </main>
    <!-- main-area-end -->

<?php include '../footer.php'; ?>
