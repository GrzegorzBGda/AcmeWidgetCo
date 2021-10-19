<?php

namespace app\Classes;

use app\Classes\Builders\BasketBuilder;
use app\Classes\Interfaces\iBasket;

class Basket implements iBasket
{
    use BasketBuilder;

    private array $products;


    /**
     * @param string $productCode
     */
    public function add(string $productCode): void
    {
        $this->products[] = $productCode;
    }


    /**
     * @throws \Exception
     */
    public function total(): float
    {
        return $this->offersStrategy->total($this->products, $this->productsCatalogue);
    }
}