<?php
declare(strict_types=1);

require('ShopProduct.php');
require('ShopProductWriter.php');
require('CdProduct.php');
require('BookProduct.php');

use Elena\OOP\esempio1\BookProduct;
use Elena\OOP\esempio1\CdProduct;
use Elena\OOP\esempio1\ShopProduct;
use Elena\OOP\esempio1\ShopProductWriter;

$product1 = new ShopProduct("Prodotto1", "Ragione sociale produttore1", "Nome principale produttore1", 5.99);
$product2 = new CdProduct("Bollicine", "Carosello Records", "Carosello", 25.26, 70);
$product3 = new BookProduct("Il nome della rosa", "Bompiani", "Umberto Eco", 28.50, 800);

$product2->setDiscount(1.26);
$product3->setDiscount(2);

$writer = new ShopProductWriter();
$writer->addProduct($product1);
$writer->addProduct($product2);
$writer->addProduct($product3);
$writer->write();

echo($product1->getTitle() ." prezzo €". $product1->getPrice() . PHP_EOL);
echo($product2->getTitle() ." prezzo €". $product2->getPrice() . PHP_EOL);
echo($product3->getTitle() ." prezzo €". $product3->getPrice() . PHP_EOL);

