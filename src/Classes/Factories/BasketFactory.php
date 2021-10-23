<?php

namespace AcmeWidgetCo\Classes\Factories;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\Decorator\BasketDecorator;
use AcmeWidgetCo\Classes\Interfaces\iBasketFactory;
use AcmeWidgetCo\Classes\Interfaces\iBasket;
use AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\OffersStrategy;

class BasketFactory implements iBasketFactory
{
    /**
     * @var ProductCatalogueFactory
     */
    private ProductCatalogueFactory $productCatalogueFactory;

    /**
     * BasketFactory constructor.
     */
    public function __construct()
    {
        $this->productCatalogueFactory = new ProductCatalogueFactory();
    }


    /**
     * @return iBasket
     */
    public function createBasket(): iBasket
    {
        $basket = new Basket();
        $basket
            ->setProductCatalogue($this->productCatalogueFactory->createProductCatalogue())
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basket;
    }

    /**
     * @return iBasket
     */
    public function createDifferentDataBasket(): iBasket
    {
        $basket = new Basket();
        $basket
            ->setProductCatalogue($this->productCatalogueFactory->createDifferentDataProductCatalogue())
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basket;
    }

    /**
     * @return iBasket
     */
    public function createBasketWithTotalDiscount(): iBasket
    {
        $basketDecorator = new BasketDecorator(new Basket());
        $basketDecorator
            ->setProductCatalogue($this->productCatalogueFactory->createProductCatalogue())
            ->setDeliveryChargeRulesStrategy(new DeliveryChargeRulesStrategy())
            ->setOffersStrategy(new OffersStrategy());

        return $basketDecorator;
    }
}