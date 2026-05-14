$(document).ready(function() {
    $(".modal").modal({
        backdrop: "static",
        keyboard: !1
    });
    $(".get_a_free_quote").click(function() {
        $("#modal01").modal("show");
    });
    $("#modal01 .close_popup").click(function() {
        $("#modal01").modal("hide");
    });
    $(".make_payment_btn_pop").click(function() {
        $("#modal02").modal("show");
    });
    $("#modal02 .close_popup").click(function() {
        $("#modal02").modal("hide");
    });

    function showFormError(element, message) {
        element.css("outline", "2px solid red");
        element.siblings(".error-message").text(message).css("color", "red");
    }

    function hideFormError(element) {
        element.css("outline", "none");
        element.siblings(".error-message").text("").css("color", "");
    }

    function quickFormValidatation(element) {
        let value = element.val().trim();
        let isValid = !0;
        let fieldName = element.attr("name");
        if (fieldName === "name") {
            if (value === "") {
                showFormError(element, "name is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "mobile") {
            if (value === "") {
                showFormError(element, "Phone Number is Required");
                isValid = !1;
            } else if (!/^\d{10}$/.test(value)) {
                showFormError(element, "Phone number must be 10 digits");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "email") {
            if (value === "") {
                showFormError(element, "Email is required");
                isValid = !1;
            } else if (!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(value)) {
                showFormError(element, "Invalid Email");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "shifting_from" || fieldName === "shifting_to") {
            if (value === "") {
                showFormError(element, "This field is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "city") {
            if (value === "") {
                showFormError(element, "City is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "shifting_type") {
            if (value === "") {
                showFormError(element, "This field is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "message") {
            if (value === "") {
                showFormError(element, "Message is required");
                isValid = !1;
            } else if (value.length < 5) {
                showFormError(element, "Message must be at least 5 characters long");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        return isValid;
    }
    // Google Sheets Integration
    function sendToGoogleSheet(formData, source) {
        const scriptURL = 'https://script.google.com/macros/s/AKfycbz3HI0cjYo7ImoGIuq4Pgh2Tw7vofiTJY9tOEWcKjovdsTW7yYOXbqAVTc3FEO6a78/exec'; // Replace with your Apps Script URL
        formData.append('source', source);
        formData.append('date', new Date().toLocaleString());
        
        fetch(scriptURL, { 
            method: 'POST', 
            body: formData,
            mode: 'no-cors' // Allows sending without CORS issues with Apps Script
        })
        .then(response => console.log('Success!', response))
        .catch(error => console.error('Error!', error.message));
    }

    $("#get_a_quote_form01 input, #get_a_quote_form01 textarea, #get_a_quote_form01 select").on("keyup", function() {
        quickFormValidatation($(this));
    });
    $("#get_a_quote_form01").on("submit", function(e) {
        e.preventDefault();
        let isValid = !0;
        $("#get_a_quote_form01 input, #get_a_quote_form01 textarea, #get_a_quote_form01 select").each(function() {
            if (!quickFormValidatation($(this))) {
                isValid = !1;
                $(this).focus();
                $(this).addClass("shake");
                setTimeout(() => {
                    $(this).removeClass("shake");
                }, 300);
                return !1;
            }
        });
        if (isValid) {
            let submitBtn = $("#get_a_quote_form01 #submitButton");
            submitBtn.prop("disabled", !0);
            submitBtn.css({
                "background-color": "gray",
                cursor: "not-allowed",
                color: "#fff"
            });
            submitBtn.html('Submitting... <span class="icon-dubble-arrow-right"></span>');
            
            // Send to Google Sheets
            sendToGoogleSheet(new FormData(this), 'Get A Quote Form 01');

            $.ajax({
                url: "form/quick_form_enq.php",
                type: "POST",
                data: $("#get_a_quote_form01").serialize(),
                success: function(data) {
                    $("#get_a_quote_form01_result").html(
                        '<small style="color:green"><strong>Thank You for Reaching Out! </strong> We have received your details and our team at <strong>Lucky Transporter PVT. LTD.</strong> will get in touch with you shortly.</small>',
                    );
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Quote Now <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                    $("#get_a_quote_form01")[0].reset();
                    gtag_report_conversion_submit_lead_form();
                },
                error: function() {
                    $("#get_a_quote_form01_result").html('<small style="color:red">There was an error submitting the form. Please try again later.</small>');
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Quote Now <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                },
            });
        }
    });

    function quickFormValidatation02(element) {
        let value = element.val().trim();
        let isValid = !0;
        let fieldName = element.attr("name");
        if (fieldName === "name") {
            if (value === "") {
                showFormError(element, "name is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "mobile") {
            if (value === "") {
                showFormError(element, "Phone Number is Required");
                isValid = !1;
            } else if (!/^\d{10}$/.test(value)) {
                showFormError(element, "Phone number must be 10 digits");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "email") {
            if (value === "") {
                showFormError(element, "Email is required");
                isValid = !1;
            } else if (!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(value)) {
                showFormError(element, "Invalid Email");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "shifting_from" || fieldName === "shifting_to") {
            if (value === "") {
                showFormError(element, "This field is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "shifting_type") {
            if (value === "") {
                showFormError(element, "This field is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "message") {
            if (value === "") {
                showFormError(element, "Message is required");
                isValid = !1;
            } else if (value.length < 5) {
                showFormError(element, "Message must be at least 5 characters long");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        return isValid;
    }
    $("#get_a_quote_form02 input, #get_a_quote_form02 textarea, #get_a_quote_form02 select").on("keyup", function() {
        quickFormValidatation02($(this));
    });
    $("#get_a_quote_form02").on("submit", function(e) {
        e.preventDefault();
        let isValid = !0;
        $("#get_a_quote_form02 input, #get_a_quote_form02 textarea, #get_a_quote_form02 select").each(function() {
            if (!quickFormValidatation($(this))) {
                isValid = !1;
                $(this).focus();
                $(this).addClass("shake");
                setTimeout(() => {
                    $(this).removeClass("shake");
                }, 300);
                return !1;
            }
        });
        if (isValid) {
            let submitBtn = $("#get_a_quote_form02 #submitButton");
            submitBtn.prop("disabled", !0);
            submitBtn.css({
                "background-color": "gray",
                cursor: "not-allowed",
                color: "#fff"
            });
            submitBtn.html('Submitting... <span class="icon-dubble-arrow-right"></span>');
            
            // Send to Google Sheets
            sendToGoogleSheet(new FormData(this), 'Get A Quote Form 02');

            $.ajax({
                url: "form/quick_form_enq.php",
                type: "POST",
                data: $("#get_a_quote_form02").serialize(),
                success: function(data) {
                    $("#get_a_quote_form02_result").html(
                        '<small style="color:green"><strong>Thank You for Reaching Out! </strong> We have received your details and our team at <strong>Lucky Transporter PVT. LTD.</strong> will get in touch with you shortly.</small>',
                    );
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Quote Now <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                    $("#get_a_quote_form02")[0].reset();
                    gtag_report_conversion_submit_lead_form();
                },
                error: function() {
                    $("#get_a_quote_form02_result").html('<small style="color:red">There was an error submitting the form. Please try again later.</small>');
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Quote Now <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                },
            });
        }
    });
    $("#corp_contact_form input, #corp_contact_form textarea, #corp_contact_form select").on("keyup change", function() {
        quickFormValidatation($(this));
    });
    $("#corp_contact_form").on("submit", function(e) {
        e.preventDefault();
        let isValid = !0;
        $("#corp_contact_form input, #corp_contact_form textarea, #corp_contact_form select").each(function() {
            if (!quickFormValidatation($(this))) {
                isValid = !1;
                $(this).focus();
                $(this).addClass("shake");
                setTimeout(() => {
                    $(this).removeClass("shake");
                }, 300);
                return !1;
            }
        });
        if (isValid) {
            let submitBtn = $("#corp_contact_form #submitButton");
            submitBtn.prop("disabled", !0);
            submitBtn.css({
                "background-color": "gray",
                cursor: "not-allowed",
                color: "#fff"
            });
            submitBtn.html('Submitting... <span class="icon-dubble-arrow-right"></span>');
            
            // Send to Google Sheets
            sendToGoogleSheet(new FormData(this), 'Corp Contact Form');

            $.ajax({
                url: "form/quick_form_enq.php",
                type: "POST",
                data: $("#corp_contact_form").serialize(),
                success: function(data) {
                    $("#corp_contact_form_result").html(
                        '<small style="color:green"><strong>Thank You for Reaching Out! </strong> We have received your details and our team at <strong>Lucky Transporter PVT. LTD.</strong> will get in touch with you shortly.</small>',
                    );
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Free Moving Quote <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                    $("#corp_contact_form")[0].reset();
                    gtag_report_conversion_submit_lead_form();
                },
                error: function() {
                    $("#corp_contact_form_result").html('<small style="color:red">There was an error submitting the form. Please try again later.</small>');
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Free Moving Quote <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                },
            });
        }
    });
    $("#corp_hero_form input, #corp_hero_form textarea, #corp_hero_form select").on("keyup change", function() {
        quickFormValidatation($(this));
    });
    $("#corp_hero_form").on("submit", function(e) {
        e.preventDefault();
        let isValid = !0;
        $("#corp_hero_form input, #corp_hero_form textarea, #corp_hero_form select").each(function() {
            if (!quickFormValidatation($(this))) {
                isValid = !1;
                $(this).focus();
                $(this).addClass("shake");
                setTimeout(() => {
                    $(this).removeClass("shake");
                }, 300);
                return !1;
            }
        });
        if (isValid) {
            let submitBtn = $("#corp_hero_form #submitButton");
            submitBtn.prop("disabled", !0);
            submitBtn.css({
                "background-color": "gray",
                cursor: "not-allowed",
                color: "#fff"
            });
            submitBtn.html('Submitting... <span class="icon-dubble-arrow-right"></span>');
            
            // Send to Google Sheets
            sendToGoogleSheet(new FormData(this), 'Corp Hero Form');

            $.ajax({
                url: "form/quick_form_enq.php",
                type: "POST",
                data: $("#corp_hero_form").serialize(),
                success: function(data) {
                    $("#corp_hero_form_result").html(
                        '<small style="color:green"><strong>Thank You for Reaching Out! </strong> We have received your details and our team at <strong>Lucky Transporter PVT. LTD.</strong> will get in touch with you shortly.</small>',
                    );
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Free Moving Quote <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                    $("#corp_hero_form")[0].reset();
                    gtag_report_conversion_submit_lead_form();
                },
                error: function() {
                    $("#corp_hero_form_result").html('<small style="color:red">There was an error submitting the form. Please try again later.</small>');
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Get a Free Moving Quote <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                },
            });
        }
    });

    function contact_us_form_validation(element) {
        let value = element.val().trim();
        let isValid = !0;
        let fieldName = element.attr("name");
        if (fieldName === "name") {
            if (value === "") {
                showFormError(element, "name is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "phone") {
            if (value === "") {
                showFormError(element, "Phone Number is Required");
                isValid = !1;
            } else if (!/^\d{10}$/.test(value)) {
                showFormError(element, "Phone number must be 10 digits");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "email") {
            if (value === "") {
                showFormError(element, "Email is required");
                isValid = !1;
            } else if (!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(value)) {
                showFormError(element, "Invalid Email");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "subject") {
            if (value === "") {
                showFormError(element, "This field is required");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        if (fieldName === "message") {
            if (value === "") {
                showFormError(element, "Message is required");
                isValid = !1;
            } else if (value.length < 5) {
                showFormError(element, "Message must be at least 5 characters long");
                isValid = !1;
            } else {
                hideFormError(element);
            }
        }
        return isValid;
    }
    $("#contact-form05 input, #contact-form05 textarea").on("keyup", function() {
        contact_us_form_validation($(this));
    });
    $("#contact-form05").on("submit", function(e) {
        e.preventDefault();
        let isValid = !0;
        $("#contact-form05 input, #contact-form05 textarea, #contact-form05 select").each(function() {
            if (!contact_us_form_validation($(this))) {
                isValid = !1;
                $(this).focus();
                $(this).addClass("shake");
                setTimeout(() => {
                    $(this).removeClass("shake");
                }, 300);
                return !1;
            }
        });
        if (isValid) {
            let submitBtn = $("#contact-form05 #submitButton");
            submitBtn.prop("disabled", !0);
            submitBtn.css({
                "background-color": "gray",
                cursor: "not-allowed",
                color: "#fff"
            });
            submitBtn.html('Submitting... <span class="icon-dubble-arrow-right"></span>');
            
            // Send to Google Sheets
            sendToGoogleSheet(new FormData(this), 'Contact Us Page Form');

            $.ajax({
                url: "form/contact_us.php",
                type: "POST",
                data: $("#contact-form05").serialize(),
                success: function(data) {
                    $(".contact-form05_result").html(
                        '<small style="color:green"><strong>Thank You for Reaching Out! </strong> We have received your details and our team at <strong>Lucky Transporter PVT. LTD.</strong> will get in touch with you shortly.</small>',
                    );
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Send Me Message <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                    $("#contact-form05")[0].reset();
                    gtag_report_conversion_submit_lead_form();
                },
                error: function() {
                    $(".contact-form05_result").html('<small style="color:red">There was an error submitting the form. Please try again later.</small>');
                    submitBtn.prop("disabled", !1);
                    submitBtn.css({
                        "background-color": "",
                        cursor: ""
                    });
                    submitBtn.html('Send Me Message <img src="assets/media/svg/right-arrow-white.svg" alt="Submit Form" class="injectable">');
                },
            });
        }
    });
});