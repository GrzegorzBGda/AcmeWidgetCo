<?php

namespace AcmeWidgetCo\Classes;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueDataStructure;

class ProductCatalogueDataStructure implements iProductCatalogueDataStructure
{
    public const PRODUCT_RED_WIDGET = 'R01';
    public const PRODUCT_GREEN_WIDGET = 'G01';
    public const PRODUCT_BLUE_WIDGET = 'B01';
    /**
     * @var array|int[]
     */
    private array $products = [
        ['product' => 'Red Widget', 'code' => self::PRODUCT_RED_WIDGET, 'price' => 3295],
        ['product' => 'Green Widget', 'code' => self::PRODUCT_GREEN_WIDGET, 'price' => 2495],
        ['product' => 'Blue Widget', 'code' => self::PRODUCT_BLUE_WIDGET, 'price' => 795],
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