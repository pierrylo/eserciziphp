<?php
namespace oop\esempio1;

use oop\esempio1\ShopProduct;
use oop\esempio1\CdProduct;
use oop\esempio1\BookProduct;
use oop\esempio1\AddressManager;

class Runner
{

    public static function run1()
    {
/* listing 03.42 */
        $product2 =   new CdProduct(
            "Exile on Coldharbour Lane",
            "The",
            "Alabama 3",
            10.99,
            0,
            60.33
        );
        print "artist: {$product2->getProducer()}\n";
/* /listing 03.42 */
    }
}
