<?php
declare(strict_types=1);

// include "autoload.php";

require('ShopProduct.php');
require('ShopProductClassWriter.php');
require('CdProduct.php');
require('BookProduct.php');
require('TextProductWriter.php');

use oop\esempio1\BookProduct;
use oop\esempio1\CdProduct;
use oop\esempio1\ShopProduct;
use oop\esempio1\ShopProductClassWriter;
use oop\esempio1\TextProductWriter;

$product1 = new ShopProduct("Prodotto1", "Ragione sociale produttore1", "Nome principale produttore1", 5.99);
$product2 = new CdProduct("Bollicine", "Carosello Records", "Carosello", 25.26, 70);
$product3 = new BookProduct("Il nome della rosa", "Bompiani", "Umberto Eco", 28.50, 800);

$product1->setDiscount(1.49);
$product2->setDiscount(1.26);
$product3->setDiscount(2);

echo "\r\n################# ShopProductClassWriter ############\r\n";
$writer = new ShopProductClassWriter();
$writer->addProduct($product1);
$writer->addProduct($product2);
$writer->addProduct($product3);
$writer->write();


echo "\r\n################# TextProductWriter ############\r\n";
$textWriter = new TextProductWriter();
$textWriter->addProduct($product1);
$textWriter->addProduct($product2);
$textWriter->addProduct($product3);
$textWriter->write();