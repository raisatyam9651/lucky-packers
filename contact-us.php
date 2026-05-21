<?php $base_url = './'; include 'header.php'; ?>

    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-transport.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact Us</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact__area section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">// Get In Touch</span>
                            <h2 class="title">We're Here to Assist You</h2>
                            <p>Have questions about your relocation? Need a custom moving solution? We're here to help! At <strong>LC Packers and Mover</strong>, we’ll provide smooth assistance for all of your moving needs. You can rely on us whether you’re moving within or outside the country. Contact us today and let us make your move easy.</p>
                        </div>
                    </div>
                </div>

                <div class="row gutter-24 justify-content-center">
                    <!-- Call Us -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact__info-item text-center" style="padding: 40px; background: #f9f9f9; border-radius: 10px; height: 100%;">
                            <div class="icon" style="font-size: 40px; color: #0A4D68; margin-bottom: 20px;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Call Us</h4>
                                <p><a href="tel:+91 8003966646" style="font-weight: 700; color: #333;">+91 8003966646</a></p>
                                <p>Available 24/7 for Your Support</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mail Us -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact__info-item text-center" style="padding: 40px; background: #f9f9f9; border-radius: 10px; height: 100%;">
                            <div class="icon" style="font-size: 40px; color: #0A4D68; margin-bottom: 20px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Mail Us</h4>
                                <p><a href="mailto:info@luckycarepackers.com" style="font-weight: 700; color: #333;">info@luckycarepackers.com</a></p>
                                <p>Email Us for Detailed Queries</p>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="contact__info-item text-center" style="padding: 40px; background: #f9f9f9; border-radius: 10px; height: 100%;">
                            <div class="icon" style="font-size: 40px; color: #0A4D68; margin-bottom: 20px;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Head Office</h4>
                                <p>G-65, Sector-110, New Palam Vihar, Phase-1, Gurugram, Haryana - 122017</p>
                                <p class="mt-10"><a href="<?php echo $base_url; ?>assets/img/GST.pdf" target="_blank" style="color: #0A4D68; font-weight: 600;"><i class="fas fa-file-pdf"></i> Download GST Certificate</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact__form-wrap section-p-60">
                    <div class="row gutter-24">
                        <div class="col-lg-6">
                            <div class="contact__map" style="height: 100%; min-height: 400px; border-radius: 10px; overflow: hidden;">
                                <iframe src="https://maps.google.com/maps?q=G-65%2C%20Sector-110%2C%20New%20Palam%20Vihar%2C%20Phase-1%2C%20Gurugram%2C%20Haryana%20-%20122017&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact__form" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.05);">
                                <h3 class="title mb-30">Send Us a Message</h3>
                                <form id="contact-form05" method="POST">
                                    <div class="row gutter-20">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="tel" name="phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-grp">
                                                <textarea name="message" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn" style="width: 100%; background: #0A4D68; color: #fff; padding: 15px; border-radius: 5px; border: none; font-weight: 700;">Submit Now</button>
                                    <div class="contact-form05_result mt-3"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

<?php include 'footer.php'; ?>
