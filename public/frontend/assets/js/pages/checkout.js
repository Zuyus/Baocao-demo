(function ($) {
    "use strict";
    let _token = $('meta[name="csrf-token"]').attr('content')
    $(document).ready(function () {
        taxAmount($('#billing_country').val())
        $('#copy_address').on('click', function () {
            if ($('#copy_address').is(':checked')) {
                $('#shipping_name').val($('#billing_name').val());
                $('#shipping_email').val($('#billing_email').val());
                $('#shipping_street_address').val($('#billing_street_address').val());
                $('#shipping_state').val($('#billing_state').val());
                $('#shipping_zipcode').val($('#billing_zipcode').val());
                let state = $('#billing_country option:selected').val();
                $('#shipping_country').val(state);

            } else {
                $('#shipping_name').val("");
                $('#shipping_email').val("");
                $('#shipping_street_address').val("");
                $('#shipping_state').val("");
                $('#shipping_zipcode').val("");
                $('#shipping_country').val("");
            }
        });

        $('input:radio[name="payment"]').on('change', function () {
            if ($(this).is(':checked')) {
                if ($(this).val() == 'creditcard') {
                    // let stripe_template = '<div class="row"><div class="col-lg-12"><input type="hidden" name="payment_platform" value="2"><label class="mt-3" for="card-element">Card details:</label><div id="cardElement"></div><small class="form-text text-muted" id="cardErrors" role="alert"></small><input type="hidden" name="payment_method" id="paymentMethod"></div></div>';
                    // $('#stripe-area').html(stripe_template);
                    $('#stripe-area').removeClass('d-none');
                    $('#bank-area').addClass('d-none');
                    $('#payButtonN').addClass('d-none');
                    $('#payButton').removeClass('d-none');
                    $('#payment_platform').val(2);
                    const stripe = Stripe($('#stripe-key').attr("data-key"));

                    const elements = stripe.elements({ locale: 'en' });
                    const cardElement = elements.create('card');

                    cardElement.mount('#cardElement');

                    const form = document.getElementById('paymentForm');
                    const payButton = document.getElementById('payButton');

                    payButton.addEventListener('click', async (e) => {
                        if (form.elements.payment_platform.value === "2") {
                            e.preventDefault();
                            const { paymentMethod, error } = await stripe.createPaymentMethod(
                                'card', cardElement, {
                                billing_details: {
                                    "name": $('#user-name').attr("data-key"),
                                    "email": $('#user-email').attr("data-key")
                                }
                            }
                            );

                            if (error) {
                                const displayError = document.getElementById('cardErrors');

                                displayError.textContent = error.message;
                            } else {
                                const tokenInput = document.getElementById('paymentMethod');

                                tokenInput.value = paymentMethod.id;
                                form.submit();
                            }
                        }
                    });
                }
                else if ($(this).val() == 'bank') {
                    $('#bank-area').removeClass('d-none');
                    $('#stripe-area').addClass('d-none');
                    $('#payButtonN').addClass('d-none');
                    $('#payButton').removeClass('d-none');
                }
                else if ($(this).val() == 'razorpay') {
                    $('#bank-area').addClass('d-none');
                    $('#stripe-area').addClass('d-none');
                    $('#payButton').addClass('d-none');
                    $('#payButtonN').removeClass('d-none');
                } else {
                    $('#bank-area').addClass('d-none');
                    $('#stripe-area').addClass('d-none');
                    $('#payButton').removeClass('d-none');
                    $('#payButtonN').addClass('d-none');
                }

            }
        });

    });

    $('body').on('click', '.buy_now', function (e) {
        let amount = $('#pay-to-razorpay').val();
        let razorpay_key = $('#razorpay-key').val();
        var options = {
            "key": razorpay_key,
            "amount": (amount * 100), // 2000 paise = INR 20
            "name": "Zairito",
            "description": "Payment",
            "handler": function (response) {
                $('#razorpay-payment-id').val(response.razorpay_payment_id);
                $('#agree').prop('required', false);
                $('#show-razor-thanks').modal('show');

            },
            "theme": {
                "color": "#528FF0"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    });

    $('#billing_country').on('change', function () {
        let country = $(this).val();
        taxAmount(country);
    })

    function taxAmount(country) {
        $.ajax({
            url: $('#get-tax-amount').data('url'),
            method: "POST",
            data: {
                country: country,
                _token: _token,
            },
            success: function (data) {
                $('#tax-show-curr').text(data.tax_show)
                $('#delivery-charge-curr').text(data.delivery_charge_curr)
                $('#total-cost-curr').text(data.total_cost_curr)
            }
        });
    }
})(jQuery)
