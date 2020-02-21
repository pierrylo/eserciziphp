<?php

declare(strict_types=1);

namespace oop\esempio1;

require('ShopProductAbstractWriter.php');

use oop\esempio1\ShopProductAbstractWriter;

class TextProductWriter extends ShopProductAbstractWriter
{
    public function write()
    {
        $str = "PRODUCTS:\n";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->getTitle()}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()})\n";
        }
        print "\r\n" . $str . "\r\n";
    }
}
