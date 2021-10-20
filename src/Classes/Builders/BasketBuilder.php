<?php

namespace AcmeWidgetCo\Classes\Builders;

use AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Interfaces\iOffersStrategy;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogue;

trait BasketBuilder
{
    /**
     * @var \AcmeWidgetCo\Classes\Interfaces\iProductCatalogue
     */
    private iProductCatalogue $productsCatalogue;
    /**
     * @var \AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy
     */
    private iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy;
    /**
     * @var \AcmeWidgetCo\Classes\Interfaces\iOffersStrategy
     */
    private iOffersStrategy $offersStrategy;


    /**
     * @param \AcmeWidgetCo\Classes\Interfaces\iProductCatalogue $productCatalogue
     * @return \AcmeWidgetCo\Classes\Builders\BasketBuilder|\AcmeWidgetCo\Classes\Basket
     */
    public function setProductCatalogue(iProductCatalogue $productCatalogue): self
    {
        $this->productsCatalogue = $productCatalogue;

        return $this;
    }


    /**
     * @return \AcmeWidgetCo\Classes\Interfaces\iProductCatalogue
     */
    public function getProductsCatalogueStrategy(): iProductCatalogue
    {
        return $this->productsCatalogue;
    }


    /**
     * @return \AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy
     */
    public function getDeliveryChargeRulesStrategy(): iDeliveryChargeRulesStrategy
    {
        return $this->deliveryChargeRulesStrategy;
    }


    /**
     * @param \AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return \AcmeWidgetCo\Classes\Builders\BasketBuilder|\AcmeWidgetCo\Classes\Basket
     */
    public function setDeliveryChargeRulesStrategy(iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): self
    {
        $this->deliveryChargeRulesStrategy = $deliveryChargeRulesStrategy;

        return $this;
    }


    /**
     * @return \AcmeWidgetCo\Classes\Interfaces\iOffersStrategy
     */
    public function getOffersStrategy(): iOffersStrategy
    {
        return $this->offersStrategy;
    }


    /**
     * @param \AcmeWidgetCo\Classes\Interfaces\iOffersStrategy $offersStrategy
     * @return \AcmeWidgetCo\Classes\Builders\BasketBuilder|\AcmeWidgetCo\Classes\Basket
     */
    public function setOffersStrategy(iOffersStrategy $offersStrategy): self
    {
        $this->offersStrategy = $offersStrategy;

        return $this;
    }
}