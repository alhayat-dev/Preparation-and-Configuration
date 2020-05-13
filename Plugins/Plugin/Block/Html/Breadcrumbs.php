<?php


namespace Unit1\Plugins\Plugin\Block\Html;


class Breadcrumbs
{
    /**
     * @param \Magento\Theme\Block\Html\Breadcrumbs $subject
     * @param callable $proceed
     * @param $crumbName
     * @param $crumbInfo
     */
//    public function aroundAddCrumb(
//        \Magento\Theme\Block\Html\Breadcrumbs $subject, callable $proceed,
//        $crumbName, $crumbInfo
//    )
//    {
//        $crumbInfo['label'] = $crumbInfo['label'].'(!a)';
//        $proceed($crumbName, $crumbInfo);
//    }


    /**
     * @param \Magento\Theme\Block\Html\Breadcrumbs $subject
     * @param $crumbName
     * @param $crumbInfo
     * @return array
     */
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = $crumbInfo['label'].'(!b)';
        return [$crumbName, $crumbInfo];
    }
}
