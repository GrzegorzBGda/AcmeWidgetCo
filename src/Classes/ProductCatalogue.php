<?php

namespace AcmeWidgetCo\Classes;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogue;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueDataStructure;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy;
use Exception;

class ProductCatalogue implements iProductCatalogue
{

    /**
     * @var iProductCatalogueStrategy
     */
    private iProductCatalogueStrategy $productCatalogueStrategy;
    /**
     * @var iProductCatalogueDataStructure
     */
    private iProductCatalogueDataStructure $productCatalogueDataStructure;


    public function __construct(
        iProductCatalogueDataStructure $productCatalogueDataStructure,
        iProductCatalogueStrategy $productCatalogueStrategy
    ) {
        $this->productCatalogueStrategy = $productCatalogueStrategy;
        $this->productCatalogueDataStructure = $productCatalogueDataStructure;
    }


    /**
     * @param string $productCode
     * @return array
     * @throws Exception
     */
    public function getProductByCode(string $productCode): array
    {
        return $this->productCatalogueStrategy->getProductByCode($productCode, $this->productCatalogueDataStructure);
    }


    /**
     * @param string $productCode
     * @return float
     * @throws Exception
     */
    public function getProductPriceByCode(string $productCode): float
    {
        return $this->productCatalogueStrategy->getProductPriceByCode($productCode, $this->productCatalogueDataStructure);
    }


    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->productCatalogueDataStructure->getProducts();
    }
}