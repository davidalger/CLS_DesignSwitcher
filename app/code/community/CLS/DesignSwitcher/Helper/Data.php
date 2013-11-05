<?php
/**
 * Data.php
 *
 * @category    CLS
 * @package     DesignSwitcher
 * @copyright   Copyright (c) 2013 David Alger & Classy Llama Studios, LLC
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class CLS_DesignSwitcher_Helper_Data extends Mage_Core_Helper_Abstract
{
    const FULL_SITE_COOKIE = 'USE_FULL_SITE';
    
    public function getMobileToDesktopUrl() {
        return Mage::getUrl('designswitcher/switch/desktop');
    }
    
    public function getDesktopToMobileUrl() {
        return Mage::getUrl('designswitcher/switch/mobile');
    }
}
