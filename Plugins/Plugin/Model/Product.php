<?php


namespace Unit1\Plugins\Plugin\Model;

class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result += 0.5;
        return $result;
    }
}
