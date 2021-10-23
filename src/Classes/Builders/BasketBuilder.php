<?php

namespace AcmeWidgetCo\Classes\Builders;

use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Interfaces\iOffersStrategy;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogue;

trait BasketBuilder
{
    /**
     * @var iProductCatalogue
     */
    private iProductCatalogue $productsCatalogue;
    /**
     * @var iDeliveryChargeRulesStrategy
     */
    private iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy;
    /**
     * @var iOffersStrategy
     */
    private iOffersStrategy $offersStrategy;


    /**
     * @param iProductCatalogue $productCatalogue
     * @return BasketBuilder|Basket
     */
    public function setProductCatalogue(iProductCatalogue $productCatalogue): self
    {
        $this->productsCatalogue = $productCatalogue;

        return $this;
    }


    /**
     * @return iProductCatalogue
     */
    public function getProductsCatalogue(): iProductCatalogue
    {
        return $this->productsCatalogue;
    }


    /**
     * @return iDeliveryChargeRulesStrategy
     */
    public function getDeliveryChargeRulesStrategy(): iDeliveryChargeRulesStrategy
    {
        return $this->deliveryChargeRulesStrategy;
    }


    /**
     * @param iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return BasketBuilder|Basket
     */
    public function setDeliveryChargeRulesStrategy(iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): self
    {
        $this->deliveryChargeRulesStrategy = $deliveryChargeRulesStrategy;

        return $this;
    }


    /**
     * @return iOffersStrategy
     */
    public function getOffersStrategy(): iOffersStrategy
    {
        return $this->offersStrategy;
    }


    /**
     * @param iOffersStrategy $offersStrategy
     * @return BasketBuilder|Basket
     */
    public function setOffersStrategy(iOffersStrategy $offersStrategy): self
    {
        $this->offersStrategy = $offersStrategy;

        return $this;
    }
}