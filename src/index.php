<?php

use app\Classes\Factories\BasketFactory;
use app\Classes\ProductCatalogue;

require_once __DIR__ . '/vendor/autoload.php';

include './app/Classes/Interfaces/iBasket.php';
include './app/Classes/Interfaces/iOffersStrategy.php';
include './app/Classes/Factories/BasketFactory.php';
include './app/Classes/Builders/BasketBuilder.php';
include './app/Classes/Strategies/SimpleDeliveryChargeRulesStrategy.php';
include './app/Classes/Strategies/SimpleOffersStrategy.php';
include './app/Classes/ProductCatalogue.php';
include './app/Classes/Basket.php';


$basketFactory = new BasketFactory();
$basket = $basketFactory->createBasket();

$basket->add(ProductCatalogue::PRODUCT_G01);
$basket->add(ProductCatalogue::PRODUCT_R01);

try {
    echo $basket->total();
} catch (Exception $e) {
    echo $e->getMessage();
}

