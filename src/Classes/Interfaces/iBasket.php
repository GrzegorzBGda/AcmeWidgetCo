<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iBasket
{
    /**
     * @param string $productCode
     */
    public function add(string $productCode): void;


    /**
     * @return float
     */
    public function total(): float;


    /**
     * @return array
     */
    public function getProducts(): array;


    /**
     * @param \AcmeWidgetCo\Classes\Interfaces\iProductCatalogue $productCatalogue
     * @return $this
     */
    public function setProductCatalogue(iProductCatalogue $productCatalogue): self;


    /**
     * @return \AcmeWidgetCo\Classes\Interfaces\iProductCatalogue
     */
    public function getProductsCatalogue(): iProductCatalogue;


    /**
     * @param \AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return $this
     */
    public function setDeliveryChargeRulesStrategy(iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): self;


    /**
     * @return \AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy
     */
    public function getDeliveryChargeRulesStrategy(): iDeliveryChargeRulesStrategy;


    /**
     * @return \AcmeWidgetCo\Classes\Interfaces\iOffersStrategy
     */
    public function getOffersStrategy(): iOffersStrategy;


    /**
     * @param \AcmeWidgetCo\Classes\Interfaces\iOffersStrategy $offersStrategy
     * @return $this
     */
    public function setOffersStrategy(iOffersStrategy $offersStrategy): self;
}