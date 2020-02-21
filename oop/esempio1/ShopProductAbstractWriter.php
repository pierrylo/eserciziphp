<?php

declare(strict_types=1);

namespace oop\esempio1;

use oop\esempio1\ShopProduct;

abstract class ShopProductAbstractWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}
