<?php
/**
 * Processor.php
 *
 * @category    CLS
 * @package     DesignSwitcher
 * @copyright   Copyright (c) 2013 David Alger & Classy Llama Studios, LLC
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class CLS_DesignSwitcher_Model_Pagecache_Processor extends Enterprise_PageCache_Model_Processor
{
    /**
     * Get currently configured design package and check the cookie
     * to determine if design exceptions should be cleared
     *
     * @return string|bool
     * @see Enterprise_PageCache_Model_Processor
     */
    protected function _getDesignPackage()
    {
        $keysString = parent::_getDesignPackage();
        $keys = explode("|", $keysString);
        
        $ignoreException = null;
        if (isset($_COOKIE[CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE])) {
            $ignoreException = $_COOKIE[CLS_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE];
        }
        
        if ($ignoreException) {
            foreach ($keys as $key => $value) {
                $keys[$key] = '';
            }
        }
        return implode($keys, "|");
    }
}
