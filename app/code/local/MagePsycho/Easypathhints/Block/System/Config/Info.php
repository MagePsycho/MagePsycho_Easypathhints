<?php

/**
 * @category   MagePsycho
 * @package    MagePsycho_Easypathhints
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Easypathhints_Block_System_Config_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
	    $html = '<div style="background-color: #EAF0EE;border:1px solid #CCCCCC;margin:20px;padding:20px ;">
                  <p>
    <table style="width: 500px;">
        <tr>
            <td colspan="2">
                <h3 style="background-color: #d1dedf; padding: 2px 0 2px 1.5em;font-weight: bold;text-transform: uppercase;color: #306375;">About MagePsycho</h3>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: middle; padding-right: 15px;"> <img src="http://www.magepsycho.com/_logo.png" alt="MagePsycho" style="float: left;" /></td>
            <td>
                MagePsycho is a team of professional PHP &amp; Magento Certified Developers with specialization in Web Applications (CMS, E-Commerce, CRM etc.).</p><br><a href="https://www.magentocommerce.com/magento-connect/developer/MagePsycho" target="_blank">Extensions on Magento-Connect</a><br>
    <a href="http://www.magepsycho.com/contacts" target="_blank">Support / Contact Us</a><br>
    <a href="http://www.magepsycho.com" target="_blank">Visit our Website</a><br>
    <a href="http://www.blog.magepsycho.com" target="_blank">Visit our Blog</a><br><br>
            </td>
        </tr>
    </table>

    <table style="width: 500px;">
        <tr>
            <td colspan="2"><h3 style="background-color: #d1dedf;padding: 2px 0 2px 1.5em;font-weight: bold;text-transform: uppercase;color: #306375;">Connect With Us</h3></td>
        </tr>
        <tr>
            <td colspan="2"><script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>
                <div id="SkypeButton_Dropdown_magentopycho_1">
                    <script type="text/javascript">
                        Skype.ui({
                            "name": "dropdown",
                            "element": "SkypeButton_Dropdown_magentopycho_1",
                            "participants": ["magentopycho"],
                            "imageSize": 24
                        });
                    </script>
                </div></td>
        </tr>
        <tr>
            <td colspan="2"><a href=\'https://twitter.com/magepsycho\' class=\'twitter-follow-button\' data-show-count=\'true\' data-size=\'large\'>Follow @magepsycho</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script></td>
        </tr>
        <tr>
            <td><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FMagentoPsycho&amp;width=241&amp;height=282&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=395977703847267" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:241px; height:282px;" allowTransparency="true"></iframe></td>
            <td><!-- Place this tag where you want the widget to render. -->
                <div class="g-page" data-width="240" data-height="250" data-href="//plus.google.com/107490112034424224777" data-showcoverphoto="false" data-rel="publisher"></div>

                <!-- Place this tag after the last widget tag. -->
                <script type="text/javascript">
                    (function() {
                        var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
                        po.src = \'https://apis.google.com/js/plusone.js\';
                        var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script></td>
        </tr>
    </table>
</div>';

        return $html;
    }
}