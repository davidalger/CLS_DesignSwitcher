<?php
/**
 * Package.php
 *
 * @category    CLS
 * @package     DesignSwitcher
 * @copyright   Copyright (c) 2013 David Alger & Classy Llama Studios, LLC
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class CLS_DesignSwitcher_Model_Core_Design_Package extends Mage_Core_Model_Design_Package
{
    /**
     * Get regex rules from config and check user-agent against them. We override to
     * determine if the design exception should be ignored based on presence of a cookie.
     * 
     * @param string $regexpsConfigPath
     * @return mixed
     * @see Mage_Core_Model_Design_Package
     */
    protected function _checkUserAgentAgainstRegexps($regexpsConfigPath)
    {
        $ignoreException = null;
        if (isset($_COOKIE[CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE])) {
            $ignoreException = $_COOKIE[CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE];
        }
        return $ignoreException ? false : parent::_checkUserAgentAgainstRegexps($regexpsConfigPath);
    }
}
