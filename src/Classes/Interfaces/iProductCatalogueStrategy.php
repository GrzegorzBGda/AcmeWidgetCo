<?php

namespace AcmeWidgetCo\Classes\Interfaces;

use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;

interface iProductCatalogueStrategy
{
    /**
     * @param string $productCode
     * @param ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return array
     */
    public function getProductByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): array;


    /**
     * @param string $productCode
     * @param ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return int
     */
    public function getProductPriceByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): int;
}