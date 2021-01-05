<?php

global $offer, $offers, $leadToken, $push_link, $push_link, $language, $fieldJson;
$_offers = [];
$_allowedCountries = [];

foreach($offers as $offerData) {
    $_offers[$offerData['id']] = $offerData;
    $_allowedCountries[] = $offerData['country']['code'];
}

$file_translate = __DIR__.'/../invoice2/languages/'. $language . '.php';

if (file_exists($file_translate)) {
    require_once($file_translate);
} else {
    $file_translate = __DIR__.'/../invoice2/languages/ru.php';
    require_once($file_translate);
}

if (isset($language)) {
    echo "
    <script>
    function set_validator_errors(){
        orderValidator.errorTitle = '" . $lang['error_title'] . "'; 

        orderValidator.errorNameField = '" . $lang['name'] . "'; 
        orderValidator.errorNameMess = '" . $lang['error_name'] . "'; 
        
        orderValidator.errorPhoneField = '" . $lang['phone'] . "'; 
        orderValidator.errorPhoneMess = '" . $lang['error_phone'] . "'; 
        
        orderValidator.errorAddress = '" . $lang['error_address'] . "'; 
        orderValidator.errorRequired = '" . $lang['error_required'] . "'; 
        orderValidator.errorMaxLength = '" . $lang['error_max_length'] . "'; 
        orderValidator.errorMinLength = '" . $lang['error_min_length'] . "'; 
        orderValidator.errorEmailField = '" . $lang['email'] . "';
        orderValidator.errorEmail = '" . $lang['error_email_mess'] . "';
        }
    </script>
    ";

}

?>
    <script src="lib/jquery.min.js"></script>
    <script src="lib/form.validate.js"></script>
    <script>

        var orderValidator = new FormValidator();

        /*
         * Some typical form actions
         */

        set_validator_errors();
        orderValidator.addRule('name', orderValidator.errorNameField, 'length', {minlength: 2});
        orderValidator.addRule('phone', orderValidator.errorPhoneField, 'phone');

        orderValidator.addMessages('name', {required: orderValidator.errorNameMess, minlength: orderValidator.errorNameMess});
        orderValidator.addMessages('phone', {phone: orderValidator.errorPhoneMess});

        orderValidator.addRule('other\[email\]', orderValidator.errorEmailField, 'email');
        orderValidator.addMessages('other\[email\]', {email: orderValidator.errorEmail});

        orderValidator.addRule('email', orderValidator.errorEmailField, 'email');
        orderValidator.addMessages('email', {email: orderValidator.errorEmail});

        orderValidator.watch('form:not(.novalidate, .notorder)');

        $(document).on('keyup keydown click input', 'form:not(.novalidate, .notorder)', function (e) {
            var form = e.currentTarget;
            var copyFields = ['name', 'phone', 'offer'];
            for (var i = 0; i < copyFields.length; ++i) {
                var fieldName = copyFields[i];
                var value = $(this).find('[name=' + fieldName + ']').val();
                if (!value)
                    continue;
                var siblingInputs = $('form').not(form).find('[name=' + fieldName + ']');
                siblingInputs.val(value);
            }
        });

        function fixForm(form) {

            form = $(form);

            form.on('submit', function( e ){
                // Блокируем кнопки при отправке формы
                $('input[type=submit]', $(this)).prop( 'disabled', true ).attr( 'disabled', true );
                $('button', $(this)).prop( 'disabled', true ).attr( 'disabled', true );
                $('.test__question-total-btn .btn').prop( 'disabled', false ).attr( 'disabled', false );
                $('.btn-test').prop( 'disabled', false ).attr( 'disabled', false );
            });

            function _fieldExists(form, fieldName) {
                return Boolean(form.find('input[name=' + fieldName + '], select[name=' + fieldName + ']').length);
            }

            function _setField(form, fieldName, value) {
                value = value || '';
                if (!_fieldExists(form, fieldName)) {
                    var el = $('<input type="hidden" name="' + fieldName + '" value="">');
                    el.val(value);
                    form.prepend(el);
                }
            }

            if (form.data('seturl') || !$(this).attr('action')) {
                form.attr("action", 'send_lead.php');
                form.prop("action", 'send_lead.php');
                form.data('seturl', 1);
            }

            form.find('[name=name]').attr('autocomplete', 'name').attr("required", 'required');
            form.find('[name=phone]').attr('autocomplete', 'tel').attr("required", 'required');

            if (!_fieldExists(form, 'country')) {
                _setField(form, 'country', app.currentOffer.country.code);
            }
            <?php
            if ( isset($fieldJson) ){
                echo "_setField(form, 'fieldJson', '".$fieldJson."');";
            }
            ?>

            <?php
            foreach($utm as $key => $val) {
                echo "_setField(form, '".$key."', '".$val."');";
            }
            ?>

            if (!_fieldExists(form, 'timezone_int')) {
                var d = new Date(), tz = d.getTimezoneOffset() / -60;
                _setField(form, 'timezone_int', tz);
            }

        }

        function fixAllForms() {
            $('form').each(function(idx, form) {
                fixForm(form);
            });
        }

        window.app = {
            timestamp: parseInt((new Date()).getTime() / 1000),
            jq: jQuery,
            offers: <?= json_encode($_offers); ?>,
            currentOffer: <?= json_encode($offer); ?>,
            allowedCountries: <?= json_encode($_allowedCountries); ?>,
            _setOfferId: false,

            setOffer: function (offerId) {
                if (offerId == this._setOfferId) {
                    return ;
                }
                this._setOfferId = offerId;
                if (offerId) {
                    var offer = app.offers[offerId];
                    var previousOffer = app.currentOffer;
                    app.currentOffer = offer;
                    var event = this.jq.Event("offerchange");
                    event.previousOffer = previousOffer;
                    event.currentOffer = app.currentOffer;
                    this.jq(document).trigger(event);
                    this.updatePage(offer);
                } else {
                    $('input[name=country]').val('');
                }
            },

            updatePage: function(offer) {
                $('x-newprice').html(offer.price);
                $('x-oldprice').html(offer.price2);
                $('x-currency').html(offer.currency.name);
                $('input[name=offer], select[name=offer]').val(offer.id);
                $('input[name=country]').val(offer.country.code);
            }


        };

        $(document).on('change input', 'select[name=offer]', function(e) {
            app.setOffer(this.value);
        });

        $(document).on('change input', function(e) {
            $('input[type=submit]', $(this)).prop( 'disabled', false ).attr( 'disabled', false );
            $('button', $(this)).prop( 'disabled', false ).attr( 'disabled', false );
        });

        setInterval(fixAllForms, 1000);

    </script>

<?php if ($push_link) { ?>
    <script src="<?= $push_link ?>"></script>
<?php }

unset($_offers);
unset($_allowedCountries);
