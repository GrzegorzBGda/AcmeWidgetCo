<?php

namespace AcmeWidgetCo\Classes\Builders;

use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\OffersStrategy;

trait BasketBuilder
{
    /**
     * @var \AcmeWidgetCo\Classes\ProductCatalogue
     */
    public ProductCatalogue $productsCatalogue;
    /**
     * @var \AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy
     */
    private DeliveryChargeRulesStrategy $deliveryChargeRulesStrategy;
    /**
     * @var \AcmeWidgetCo\Classes\Strategies\OffersStrategy
     */
    private OffersStrategy $offersStrategy;


    /**
     * @param \AcmeWidgetCo\Classes\ProductCatalogue $productCatalogue
     * @return $this
     */
    public function setProductCatalogue(ProductCatalogue $productCatalogue): self
    {
        $this->productsCatalogue = $productCatalogue;

        return $this;
    }


    /**
     * @return \AcmeWidgetCo\Classes\ProductCatalogue
     */
    public function getProductsCatalogueStrategy(): ProductCatalogue
    {
        return $this->productsCatalogue;
    }


    /**
     * @param \AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return $this
     */
    public function setDeliveryChargeRulesStrategy(DeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): self
    {
        $this->deliveryChargeRulesStrategy = $deliveryChargeRulesStrategy;

        return $this;
    }


    /**
     * @return \AcmeWidgetCo\Classes\Strategies\DeliveryChargeRulesStrategy
     */
    public function getDeliveryChargeRulesStrategy(): DeliveryChargeRulesStrategy
    {
        return $this->deliveryChargeRulesStrategy;
    }


    /**
     * @param \AcmeWidgetCo\Classes\Strategies\OffersStrategy $offersStrategy
     * @return $this
     */
    public function setOffersStrategy(OffersStrategy $offersStrategy): self
    {
        $this->offersStrategy = $offersStrategy;

        return $this;
    }


    /**
     * @return \AcmeWidgetCo\Classes\Strategies\OffersStrategy
     */
    public function getOffersStrategy(): OffersStrategy
    {
        return $this->offersStrategy;
    }
}