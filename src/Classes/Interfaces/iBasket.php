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
     * @param iProductCatalogue $productCatalogue
     * @return $this
     */
    public function setProductCatalogue(iProductCatalogue $productCatalogue): self;


    /**
     * @return iProductCatalogue
     */
    public function getProductsCatalogue(): iProductCatalogue;


    /**
     * @param iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return $this
     */
    public function setDeliveryChargeRulesStrategy(iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): self;


    /**
     * @return iDeliveryChargeRulesStrategy
     */
    public function getDeliveryChargeRulesStrategy(): iDeliveryChargeRulesStrategy;


    /**
     * @return iOffersStrategy
     */
    public function getOffersStrategy(): iOffersStrategy;


    /**
     * @param iOffersStrategy $offersStrategy
     * @return $this
     */
    public function setOffersStrategy(iOffersStrategy $offersStrategy): self;
}