<?php

/**
 * @category   MagePsycho
 * @package    MagePsycho_Easypathhints
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Easypathhints_Block_System_Config_Version extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    const EXTENSION_URL = 'http://www.magepsycho.com/easy-template-path-hints.html';

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return sprintf('<a href="%s" title="Easy Template Path Hints" target="_blank">%s</a>', self::EXTENSION_URL, Mage::helper('easypathhints')->getExtensionVersion());
    }
}