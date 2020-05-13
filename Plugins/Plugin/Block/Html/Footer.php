<?php


namespace Unit1\Plugins\Plugin\Block\Html;


class Footer
{
    /**
     * Retrieve copyright information
     *
     * @return string
     */
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        $result =  $result . 'Customized copyright!';
        return __($result);
    }

}
