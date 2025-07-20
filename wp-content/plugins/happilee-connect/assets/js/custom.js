jQuery(document).ready(function($) {
    let iti = null;
    if ($("#wpc-form").length) {
        let phoneInput = $("#phone")[0];
        iti = window.intlTelInput(phoneInput, {
            strictMode: true,
            separateDialCode: true,
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us"));
            },
            loadUtilsOnInit: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.6.0/build/js/utils.min.js"
        });
    }

    $('#wpc-form').on('submit', function(e) {
        e.preventDefault();

        if (!iti) {
            console.error("Phone input not initialized.");
        }

        var phone = $('#phone').val();
        var dialCode = iti.getSelectedCountryData().dialCode;

        $.ajax({
            url: ajaxurl,
            // url: hpl_ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'happilee_whatsapp_contact',
                phone: phone,
                country_code: dialCode,
                security: hpl_ajax_object.nonce
            },
            success: function(response) {
                $('#phone').val('');
                if (response.success) {
                    var message = encodeURIComponent("Hello, I want to know about https://happilee.io/");
                    var whatsappUrl = `https://api.whatsapp.com/send/?phone=918848803679&text=${message}&type=phone_number&app_absent=0`;

                    window.open(whatsappUrl, '_blank');
                } else {
                    // Error response from server (e.g., DB insert failed)
                    $('#wpc-response').html(response.data.message || 'Something went wrong.');
                }
            }

        });
    });

});