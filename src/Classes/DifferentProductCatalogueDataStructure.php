<?php

namespace AcmeWidgetCo\Classes;

use AcmeWidgetCo\Classes\Interfaces\iProductCatalogueDataStructure;

class DifferentProductCatalogueDataStructure implements iProductCatalogueDataStructure
{
    public const PRODUCT_DIFFERENT_RED_WIDGET = 'DR01';
    public const PRODUCT_DIFFERENT_GREEN_WIDGET = 'DG01';
    public const PRODUCT_DIFFERENT_BLUE_WIDGET = 'DB01';
    /**
     * @var array|int[]
     */
    private array $products = [
        ['product' => 'Different Red Widget', 'code' => self::PRODUCT_DIFFERENT_RED_WIDGET, 'price' => 12113],
        ['product' => 'Different Green Widget', 'code' => self::PRODUCT_DIFFERENT_GREEN_WIDGET, 'price' => 3408],
        ['product' => 'Different Blue Widget', 'code' => self::PRODUCT_DIFFERENT_BLUE_WIDGET, 'price' => 521],
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