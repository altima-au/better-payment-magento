<?php

/**
 * Altima Better Credit Card Form Extension
 *
 * Altima web systems.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is available through the world-wide-web at this URL:
 * http://blog.altima.net.au/lookbook-magento-extension/lookbook-professional-licence/
 *
 * @category   Altima
 * @package    Altima_BetterCreditCardForm
 * @author     Altima Web Systems http://altimawebsystems.com/
 * @license    http://blog.altima.net.au/lookbook-magento-extension/lookbook-professional-licence/
 * @email      support@altima.net.au
 * @copyright  Copyright (c) 2012 Altima Web Systems (http://altimawebsystems.com/)
 */
class Altima_BetterCreditCardForm_Block_BetterCreditCardFormjs extends Mage_Core_Block_Template {

    public function _toHtml() {
        $helper = Mage::helper('altima_bettercreditcardform');
        $message = false;

        $output = '
    <script type="text/javascript">
   
        jQuery("#checkout-payment-method-load").bind("DOMNodeInserted DOMNodeRemoved", function() {
        if (!jQuery("div").is(".card-wrapper")) {
            jQuery( "#payment_form_ccsave" ).prepend( "<div class=\'card-wrapper\'></div>" );
            jQuery( "#payment_form_ccsave" ).append( "<input id=\'card-expiry\' name=\'card-expiry\' type=\'hidden\' />" );
            var card_img = jQuery("#co-payment-form");
            var card = new Card({
                form: "#co-payment-form",
                container: ".card-wrapper",
                formSelectors: {
                    numberInput: "input#ccsave_cc_number",
                    expiryInput: "input#card-expiry",
                    cvcInput: "input#ccsave_cc_cid",
                    nameInput: "input#ccsave_cc_owner"
                },
            width: 200,
            formatting: true,
            debug: false
        });
            var exp_m = "**";
            var exp_y = "**";
            jQuery("#ccsave_expiration").change(function () {
                jQuery( "select#ccsave_expiration option:selected" ).each(function() {
                    exp_m = jQuery( this ).val();
                });
                
                jQuery("input[name=\'card-expiry\']").val(exp_m+"/"+exp_y).change();
                jQuery(".jp-card-expiry").html(exp_m+"/"+exp_y);
                jQuery(".jp-card-expiry").addClass("jp-card-focused");
            });
            
            jQuery("#ccsave_expiration_yr").change(function () {
                jQuery( "select#ccsave_expiration_yr option:selected" ).each(function() {
                    exp_y = jQuery( this ).val();
                });
                
                jQuery("input[name=\'card-expiry\']").val(exp_m+"/"+exp_y).change();
                jQuery(".jp-card-expiry").html(exp_m+"/"+exp_y);
                jQuery(".jp-card-expiry").addClass("jp-card-focused");
            });
 
        }    
        });

    </script>
    <script src="/js/altima/bettercreditcardform/jquery.card.js"></script>
';

        return $output;
    }

}
