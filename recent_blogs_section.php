<!-- blog-post-area -->
<section class="blog__post-area-three section-p-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <div class="section__title mb-30">
                    <span class="sub-title" title="Explore Recent Blogs by Lucky Transporter">// Recent Blogs</span>
                    <h2 class="title">Our Latest Insights</h2>
                    <p class="description">Discover expert tips, relocation advice, and industry insights to make your move seamless and hassle-free.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="view-all-btn text-end mb-30">
                    <a href="<?php echo $base_url; ?>blogs/" class="btn" title="Explore All Blogs by Lucky Transporter">See All Blogs
                        <img src="<?php echo $base_url; ?>assets/media/svg/right-arrow-white.svg" alt="View All Blogs" class="injectable">
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center gutter-24">
            <?php 
            if (!isset($blogs)) {
                include __DIR__ . '/blogs_data.php'; 
            }
            // Show only the first 3 blogs
            $recent_blogs = array_slice($blogs, 0, 3);
            foreach ($recent_blogs as $blog): 
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog__post-item shine__animate-item" style="height: 100%; display: flex; flex-direction: column; background: #fff; border: 1px solid #eee; border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                    <div class="blog__post-thumb">
                        <a href="<?php echo $base_url; ?>blogs/<?php echo $blog['slug']; ?>" class="shine__animate-link">
                            <img src="<?php echo $base_url . $blog['image']; ?>" alt="<?php echo $blog['title']; ?>" style="width: 100%; height: 220px; object-fit: cover;" loading="lazy">
                        </a>
                    </div>
                    <div class="blog__post-content" style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                        <div class="blog__meta" style="margin-bottom: 15px; font-size: 14px; color: #666;">
                            <ul class="list-wrap" style="list-style: none; padding: 0; margin: 0;">
                                <li><i class="fa-regular fa-calendar-days"></i> <?php echo $blog['date']; ?></li>
                            </ul>
                        </div>
                        <h3 class="title" style="font-size: 18px; font-weight: 700; margin-bottom: 15px; line-height: 1.4;">
                            <a href="<?php echo $base_url; ?>blogs/<?php echo $blog['slug']; ?>" title="<?php echo $blog['title']; ?>" style="color: #000; text-decoration: none;">
                                <?php echo $blog['title']; ?>
                            </a>
                        </h3>
                        <p style="font-size: 14px; color: #555; flex-grow: 1; margin-bottom: 20px;"><?php echo $blog['excerpt']; ?></p>
                        <a href="<?php echo $base_url; ?>blogs/<?php echo $blog['slug']; ?>" class="btn btn-two" style="border: 2px solid #e11c24; padding: 10px 20px; border-radius: 5px; font-size: 14px; font-weight: 600; color: #fff; background: #e11c24; width: fit-content; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; transition: all 0.3s ease;">Read More
                            <i class="fa-solid fa-arrow-right" style="font-size: 12px; color: #fff;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- blog-post-area-end -->
