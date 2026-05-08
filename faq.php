<?php $base_url = './'; include 'header.php'; ?>

    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?php echo $base_url; ?>assets/media/bg/lc-packers-breadcrumb-transport.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Frequently Asked Questions</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php echo $base_url; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem" class="active_page">FAQs</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <style>
            .faq__wrap .accordion-button::before {
                display: inline-block;
                font-family: "Font Awesome 5 Free" !important;
                font-weight: 900;
                content: "\f078" !important; /* fa-chevron-down */
                position: absolute;
                right: 25px;
                top: 50%;
                transform: translateY(-50%);
                transition: all 0.3s ease;
                font-size: 18px;
                color: #FF7A00; /* Using brand orange */
                background-image: none !important;
            }
            .faq__wrap .accordion-button:not(.collapsed)::before {
                transform: translateY(-50%) rotate(180deg);
                color: #fff;
            }
            .faq__wrap .accordion-button {
                padding-right: 60px !important;
                position: relative;
            }
            .faq__wrap .accordion-button::after {
                display: none !important;
            }
        </style>


        <!-- faq-area -->
        <section class="faq__area section-p-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">// Common Queries</span>
                            <h2 class="title">Everything You Need to Know</h2>
                            <p>At <strong>LC Packers and Movers PVT. LTD.</strong>, we aim to make your relocation journey transparent and stress-free. Here are some of the most frequently asked questions to help you prepare for your move.</p>
                        </div>
                        <div class="faq__wrap">
                            <div class="accordion" id="accordionExample">
                                
                                <!-- Q1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q1: What services does LC Packers and Movers PVT. LTD. provide?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We offer a comprehensive range of relocation services, including household relocation, office shifting, car and bike transportation, warehousing and storage, international relocation, customs clearance, and expert packing/unpacking services.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q2: How do I book your services?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>You can easily book our services by calling our hotline at +91 8003600809, submitting the "Get a Free Quote" form on our website, or messaging us directly on WhatsApp for an instant response.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q3: Is my stuff insured during transit?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, we provide comprehensive goods insurance options to protect your belongings against any unforeseen events during transportation, giving you complete peace of mind.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Q4: How far in advance should I book my move?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We recommend booking at least 7-10 days in advance to ensure smooth coordination and availability. However, we also do our best to accommodate last-minute relocation requests based on availability.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Q5: What kind of packing materials do you use?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We use premium, high-quality packing materials such as bubble wrap, heavy-duty corrugated sheets, stretch film, sturdy cartons, and specialized wooden crates for fragile electronics and artwork.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Q6: How do you handle sensitive or fragile items?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Fragile items are packed using multiple layers of protective materials like foam and padded wraps. These boxes are clearly marked as "Fragile" and are handled with extreme care by our expert team.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Q7: Can I track my shipment while it is in transit?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, all our primary long-distance transport vehicles are equipped with GPS tracking systems. You can contact our support team to get real-time updates on your shipment's location.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q8 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Q8: Do you provide international relocation services?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Absolutely. We handle end-to-end international relocation, including specialized export packing, customs documentation, and coordinated shipping to your destination country.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q9 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Q9: How is the pricing for a move determined?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our pricing is transparent and based on several factors: the distance between origin and destination, the volume/weight of goods, the type of packing required, and any additional services like insurance or storage.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q10 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Q10: Do you offer unpacking and furniture arrangement services?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes! We don't just deliver your boxes; we also offer professional unpacking services and help you arrange heavy furniture and appliances in your new home as per your instructions.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q11 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            Q11: Can you transport vehicles like cars and bikes?
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, we use specialized car carriers and enclosed trucks to safely transport cars and motorcycles across India, ensuring they arrive in pristine condition.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q12 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            Q12: What are your payment options?
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We offer multiple convenient payment options, including credit/debit cards, Net Banking, UPI (GPay/PhonePe), and cash payments.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q13 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Q13: How should I prepare for the moving day?
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We suggest setting aside important personal documents and jewelry, decluttering items you no longer need, and clearly labeling any specific boxes. Our team will handle the heavy lifting and professional packing on the day.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q14 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            Q14: What happens if my moving date changes?
                                        </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We understand that plans can change. Just inform us at least 48 hours in advance, and we will reschedule your move to the next available date that works for you.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Q15 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            Q15: Why should I choose LC Packers and Movers PVT. LTD.?
                                        </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>With over 11 years of experience, we provide professional, reliable, and hassle-free relocation services. Our commitment to safety, transparent pricing, and customer satisfaction makes us India's preferred moving partner.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- call-to-action-area -->
        <section class="cta__area section-p-60">
            <div class="container">
                <div class="cta__inner-wrap" style="background-color: #0A4D68; border-radius: 15px; padding: 40px; color: #fff;">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="cta__content">
                                <h2 class="title" style="color: #fff; margin-bottom: 10px;">Still Have Questions?</h2>
                                <p style="margin-bottom: 0;">Our expert team is here to help you 24/7. Get in touch for a free consultation today!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="tel:+91 8003600809" class="btn" style="background-color: #FF7A00; color: #fff; padding: 15px 30px; border-radius: 5px; text-decoration: none; font-weight: bold;">
                                Call Us Now <i class="fas fa-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-to-action-area-end -->

    </main>
    <!-- main-area-end -->

<?php include 'footer.php'; ?>
