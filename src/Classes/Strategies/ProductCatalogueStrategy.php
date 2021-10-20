<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueStrategy;
use AcmeWidgetCo\Classes\ProductCatalogueDataStructure;
use Exception;

class ProductCatalogueStrategy implements iProductCatalogueStrategy
{
//    /**
//     * @var \AcmeWidgetCo\Classes\ProductCatalogueDataStructure
//     */
//    private ProductCatalogueDataStructure $productCatalogueDataStructure;
//
//
//    /**
//     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
//     */
//    public function __construct(ProductCatalogueDataStructure $productCatalogueDataStructure)
//    {
//        $this->productCatalogueDataStructure = $productCatalogueDataStructure;
//    }


    /**
     * @param string $productCode
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return array
     * @throws \Exception
     */
    public function getProductByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): array
    {
        $foundProduct = null;
        foreach ($productCatalogueDataStructure->getProducts() as $product) {
            if ($product['code'] === $productCode) {
                $foundProduct = $product;
            }
        }
        if (!$foundProduct) {
            throw new Exception('There is no product with code: ' . $productCode);
        }

        return $foundProduct;
    }


    /**
     * @param string $productCode
     * @param \AcmeWidgetCo\Classes\ProductCatalogueDataStructure $productCatalogueDataStructure
     * @return float
     * @throws \Exception
     */
    public function getProductPriceByCode(string $productCode, ProductCatalogueDataStructure $productCatalogueDataStructure): float
    {
        return $this->getProductByCode($productCode, $productCatalogueDataStructure)['price'];
    }
}