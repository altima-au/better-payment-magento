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
class Altima_BetterCreditCardForm_Model_Layout_Generate_Observer {

    public function __construct() {
        
    }

    public function includeJavascripts($observer) {

        $helper = Mage::helper('altima_bettercreditcardform');
        if ($helper->getEnabled()) {


            $layout = Mage::app()->getLayout();
            $content = $layout->getBlock('footer');

            $_head = $layout->getBlock('head');
            if ($_head) {
                $_head->addJs('altima/bettercreditcardform/check_jquery.js');
                $_head->addJs('altima/bettercreditcardform/jquery.noconflict.js');
            }
            if ($content = $layout->getBlock('footer')) {
                $block = $layout->createBlock('altima_bettercreditcardform/bettercreditcardformjs');
                $content->insert($block);
            }
        }
    }

}
