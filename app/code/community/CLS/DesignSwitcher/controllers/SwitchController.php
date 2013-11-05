<?php
/**
 * SwitchController.php
 *
 * @category    CLS
 * @package     DesignSwitcher
 * @copyright   Copyright (c) 2013 David Alger & Classy Llama Studios, LLC
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class CLS_DesignSwitcher_SwitchController extends Mage_Core_Controller_Front_Action
{
    /**
     * Switch to Desktop theme
     */
    public function desktopAction()
    {
        setcookie(CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE, 1, 0, '/');
        $this->_redirectReferer();
    }

    /**
     * Revert to Mobile theme
     */
    public function mobileAction()
    {
        setcookie(CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE, 0, 0, '/');
        $this->_redirectReferer();
    }
}
