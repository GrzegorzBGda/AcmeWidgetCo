<?php

namespace app\Classes;

class ProductCatalogue
{

    public const PRODUCT_R01 = 'R01';
    public const PRODUCT_G01 = 'G01';

    /**
     * @var array|float[]
     */
    private array $products = [
        self::PRODUCT_R01 => 32.95,
        self::PRODUCT_G01 => 24.95,
    ];


    /**
     * @throws \Exception
     */
    public function getProductPriceByName($productName): float
    {
        if (!isset($this->products[$productName])) {
            throw new \Exception('There is no product with name: ' . $productName);
        }

        return $this->products[$productName];
    }
}