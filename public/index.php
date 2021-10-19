<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\Factories\BasketFactory;

//include './app/Classes/Interfaces/iBasket.php';
//include './app/Classes/Interfaces/iOffersStrategy.php';
//include './app/Classes/Factories/BasketFactory.php';
//include './app/Classes/Builders/BasketBuilder.php';
//include './app/Classes/Strategies/SimpleDeliveryChargeRulesStrategy.php';
//include './app/Classes/Strategies/SimpleOffersStrategy.php';
//include './app/Classes/ProductCatalogue.php';
//include './app/Classes/Basket.php';


$basketFactory = new BasketFactory();
$basket = $basketFactory->createBasket();

$basket->add(ProductCatalogue::PRODUCT_GREEN_WIDGET);
$basket->add(ProductCatalogue::PRODUCT_RED_WIDGET);

try {
    echo $basket->total();
} catch (Exception $e) {
    echo $e->getMessage();
}

