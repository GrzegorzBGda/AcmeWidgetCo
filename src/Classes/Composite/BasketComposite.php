<?php

namespace AcmeWidgetCo\Classes\Composite;

use AcmeWidgetCo\Classes\Interfaces\iBasket;
use AcmeWidgetCo\Classes\Interfaces\iBasketComposite;

class BasketComposite implements iBasketComposite
{
    /**
     * @var array
     */
    private array $baskets = [];

    /**
     * @return float
     */
    public function total(): float
    {
        $total = 0;
        foreach ($this->baskets as $basket) {
            $total += $basket->total();
        }

        return $total;
    }

    /**
     * @param iBasket $basket
     * @return iBasketComposite
     */
    public function addBasket(iBasket $basket): iBasketComposite
    {
        $this->baskets[] = $basket;

        return $this;
    }
}