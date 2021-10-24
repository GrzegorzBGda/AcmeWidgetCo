<?php

namespace AcmeWidgetCo\Classes;

use AcmeWidgetCo\Classes\Builders\BasketBuilder;
use AcmeWidgetCo\Classes\Interfaces\iBasket;
use Exception;

final class Basket implements iBasket
{
    use BasketBuilder;

    private array $products;


    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }


    /**
     * @param string $productCode
     */
    public function add(string $productCode): void
    {
        $this->products[] = $productCode;
    }


    /**
     * @throws Exception
     */
    public function total(): float
    {
        if (!isset($this->offersStrategy)) {
            throw new Exception("OfferStrategy must be set before using total() method");
        }

        return $this->offersStrategy->total($this);
    }
}