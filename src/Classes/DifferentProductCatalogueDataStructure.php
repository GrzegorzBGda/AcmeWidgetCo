<?php

namespace AcmeWidgetCo\Classes;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueDataStructure;

class DifferentProductCatalogueDataStructure implements iProductCatalogueDataStructure
{
    public const PRODUCT_DIFFERENT_RED_WIDGET = 'DR01';
    public const PRODUCT_DIFFERENT_GREEN_WIDGET = 'DG01';
    public const PRODUCT_DIFFERENT_BLUE_WIDGET = 'DB01';
    /**
     * @var array|float[]
     */
    private array $products = [
        ['product' => 'Different Red Widget', 'code' => self::PRODUCT_DIFFERENT_RED_WIDGET, 'price' => 121.13],
        ['product' => 'Different Green Widget', 'code' => self::PRODUCT_DIFFERENT_GREEN_WIDGET, 'price' => 34.08],
        ['product' => 'Different Blue Widget', 'code' => self::PRODUCT_DIFFERENT_BLUE_WIDGET, 'price' => 5.21],
    ];


    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }


    /**
     * @param array $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

}