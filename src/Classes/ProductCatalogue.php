<?php

namespace AcmeWidgetCo\Classes;

class ProductCatalogue
{

    public const PRODUCT_RED_WIDGET = 'R01';
    public const PRODUCT_GREEN_WIDGET = 'G01';
    public const PRODUCT_BLUE_WIDGET = 'B01';

    /**
     * @var array|float[]
     */
    private array $products = [
        ['product' => 'Red Widget', 'code' => self::PRODUCT_RED_WIDGET, 'price' => 32.95],
        ['product' => 'Green Widget', 'code' => self::PRODUCT_GREEN_WIDGET, 'price' => 24.95],
        ['product' => 'Blue Widget', 'code' => self::PRODUCT_BLUE_WIDGET, 'price' => 7.95],
    ];


    /**
     * @param $productCode
     * @return array
     * @throws \Exception
     */
    public function getProductByCode($productCode): array
    {
        $foundProduct = null;
        foreach ($this->products as $product) {
            if ($product['code'] === $productCode) {
                $foundProduct = $product;
            }
        }
        if (!$foundProduct) {
            throw new \Exception('There is no product with code: ' . $productCode);
        }

        return $foundProduct;
    }


    /**
     * @throws \Exception
     */
    public function getProductPriceByCode($productCode): float
    {
        return $this->getProductByCode($productCode)['price'];
    }
}