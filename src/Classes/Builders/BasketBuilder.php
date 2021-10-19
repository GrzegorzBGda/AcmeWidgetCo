<?php

namespace AcmeWidgetCo\Classes\Builders;

use AcmeWidgetCo\Classes\ProductCatalogue;
use AcmeWidgetCo\Classes\Strategies\SimpleDeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Strategies\SimpleOffersStrategy;

trait BasketBuilder
{
    /**
     * @var \AcmeWidgetCo\Classes\ProductCatalogue
     */
    public ProductCatalogue $productsCatalogue;

    /**
     * @var \AcmeWidgetCo\Classes\Strategies\SimpleDeliveryChargeRulesStrategy
     */
    private SimpleDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy;

    /**
     * @var \AcmeWidgetCo\Classes\Strategies\SimpleOffersStrategy
     */
    private SimpleOffersStrategy $offersStrategy;



    /**
     * @param \app\Classes\ProductCatalogue $productCatalogue
     * @return $this
     */
    public function setProductCatalogue(ProductCatalogue $productCatalogue): self
    {
        $this->productsCatalogue = $productCatalogue;

        return $this;
    }


    /**
     * @param \app\Classes\Strategies\SimpleDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return $this
     */
    public function setDeliveryChargeRules(SimpleDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): self
    {
        $this->deliveryChargeRulesStrategy = $deliveryChargeRulesStrategy;

        return $this;
    }


    /**
     * @param \app\Classes\Strategies\SimpleOffersStrategy $offersStrategy
     * @return $this
     */
    public function setOffers(SimpleOffersStrategy $offersStrategy): self
    {
        $this->offersStrategy = $offersStrategy;

        return $this;
    }
}