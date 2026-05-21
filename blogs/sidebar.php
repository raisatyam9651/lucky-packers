                        <aside class="blog__sidebar">
                            
                            <!-- Our Services Widget -->
                            <div class="blog-widget">
                                <h4 class="widget-title" style="border-bottom: 2px solid #0A4D68; padding-bottom: 10px; margin-bottom: 20px;">Our Services</h4>
                                <div class="sidebar-services-list">
                                    <ul class="list-wrap" style="list-style: none; padding: 0;">
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/transportation.php" style="color: #666; font-size: 14px; font-weight: 500;">Transportation</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/packing-and-moving.php" style="color: #666; font-size: 14px; font-weight: 500;">Packing and Moving</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/loading-and-unloading.php" style="color: #666; font-size: 14px; font-weight: 500;">Loading and Unloading</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/unpacking-and-escort.php" style="color: #666; font-size: 14px; font-weight: 500;">Unpacking and Escort</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/home-shifting.php" style="color: #666; font-size: 14px; font-weight: 500;">Home Shifting</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/domestic-relocation.php" style="color: #666; font-size: 14px; font-weight: 500;">Domestic Relocation</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/international-relocation.php" style="color: #666; font-size: 14px; font-weight: 500;">International Relocation</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/warehouse-services.php" style="color: #666; font-size: 14px; font-weight: 500;">Warehouse Services</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/car-and-bike-transportation.php" style="color: #666; font-size: 14px; font-weight: 500;">Car and Bike Transportation</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/office-shifting.php" style="color: #666; font-size: 14px; font-weight: 500;">Office Shifting</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/hotel-shifting.php" style="color: #666; font-size: 14px; font-weight: 500;">Hotel Shifting</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/factory-shifting.php" style="color: #666; font-size: 14px; font-weight: 500;">Factory Shifting</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/pet-moving.php" style="color: #666; font-size: 14px; font-weight: 500;">Pet Moving</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/custom-clearance.php" style="color: #666; font-size: 14px; font-weight: 500;">Custom Clearance</a></li>
                                        <li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/painting-moving-services.php" style="color: #666; font-size: 14px; font-weight: 500;">Painting Moving Services</a></li>
                                        <li style="border: none; padding: 10px 0;"><a href="<?php echo $base_url; ?>our-services/goods-insurance.php" style="color: #666; font-size: 14px; font-weight: 500;">Goods Insurance</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Latest Post Widget -->
                            <div class="blog-widget">
                                <h4 class="widget-title" style="border-bottom: 2px solid #0A4D68; padding-bottom: 10px; margin-bottom: 20px;">Latest Post</h4>
                                <div class="rc__post-wrapper">
                                    <?php 
                                    if (!isset($blogs)) {
                                        include __DIR__ . '/../blogs_data.php'; 
                                    }
                                    $latest_posts = array_slice($blogs, 0, 3);
                                    foreach ($latest_posts as $post): 
                                    ?>
                                    <div class="rc__post-item" style="display: flex; gap: 15px; margin-bottom: 20px;">
                                        <div class="rc__post-thumb" style="width: 80px; height: 60px; overflow: hidden; border-radius: 5px;">
                                            <a href="<?php echo $base_url; ?>blogs/<?php echo $post['slug']; ?>">
                                                <img src="<?php echo $base_url . $post['image']; ?>" alt="<?php echo $post['title']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="rc__post-content" style="flex: 1;">
                                            <span class="date" style="font-size: 12px; color: #666; display: block; margin-bottom: 5px;"><i class="fa-regular fa-calendar-days" style="color: #0A4D68; margin-right: 5px;"></i><?php echo $post['date']; ?></span>
                                            <h4 class="title" style="font-size: 13px; font-weight: 700; line-height: 1.4;">
                                                <a href="<?php echo $base_url; ?>blogs/<?php echo $post['slug']; ?>" style="color: #0A4D68;"><?php echo $post['title']; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- CTA Widget -->
                            <div class="blog-widget" style="padding: 0; border: none; background: none;">
                                <div class="sidebar__contact-box" style="padding: 40px 30px; border: 1px solid #eee; border-radius: 10px; text-align: center; background: #fff;">
                                    <div class="logo mb-30">
                                        <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>assets/media/logo/lc-packers-logo.png" alt="LC Packers and Mover" style="max-width: 180px;"></a>
                                    </div>
                                    <h4 class="title" style="font-size: 18px; font-weight: 800; color: #0A4D68; line-height: 1.4; margin-bottom: 20px;">Tailored Relocation Solutions For You</h4>
                                    <div class="phone" style="margin-bottom: 25px;">
                                        <a href="tel:+918003966646" style="font-size: 20px; font-weight: 800; color: #0A4D68; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                            <i class="fa-solid fa-phone-volume"></i> +91 8003966646
                                        </a>
                                    </div>
                                    <a href="<?php echo $base_url; ?>contact-us.php" class="btn" style="background: #e11c24; color: #fff; width: 100%; border-radius: 5px; padding: 12px; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 10px; font-size: 14px;">
                                        Get A Free Quote <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                                    </a>
                                </div>
                            </div>

                        </aside>
