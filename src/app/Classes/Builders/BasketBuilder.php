<?php

namespace app\Classes\Builders;

use app\Classes\ProductCatalogue;
use app\Classes\Strategies\SimpleDeliveryChargeRulesStrategy;
use app\Classes\Strategies\SimpleOffersStrategy;

trait BasketBuilder
{
    /**
     * @var \app\Classes\ProductCatalogue
     */
    private ProductCatalogue $productsCatalogue;

    /**
     * @var \app\Classes\Strategies\SimpleDeliveryChargeRulesStrategy
     */
    private SimpleDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy;

    /**
     * @var \app\Classes\Strategies\SimpleOffersStrategy
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