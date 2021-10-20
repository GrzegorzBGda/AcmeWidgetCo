<?php

namespace AcmeWidgetCo\Classes\Interfaces;

interface iProductCatalogue
{
    /**
     * @param string $productCode
     * @return array
     */
    public function getProductByCode(string $productCode): array;


    /**
     * @param string $productCode
     * @return float
     */
    public function getProductPriceByCode(string $productCode): float;


    /**
     * @return array
     */
    public function getProducts(): array;
}