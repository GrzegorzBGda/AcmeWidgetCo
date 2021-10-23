<?php


namespace AcmeWidgetCo\Classes\Decorator;


use AcmeWidgetCo\Classes\Basket;
use AcmeWidgetCo\Classes\Interfaces\iBasket;
use AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy;
use AcmeWidgetCo\Classes\Interfaces\iOffersStrategy;
use AcmeWidgetCo\Classes\Interfaces\iProductCatalogue;
use Exception;

class BasketDecorator implements iBasket
{
    /**
     * @var Basket
     */
    private Basket $basket;

    /**
     * BasketDecorator constructor.
     * @param Basket $basket
     */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
     * @param string $productCode
     */
    public function add(string $productCode): void
    {
        $this->basket->add($productCode);
    }

    /**
     * @return float
     * @throws Exception
     */
    public function total(): float
    {
        return round($this->basket->total() - ($this->basket->total() * (30 / 100)), 2);
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->basket->getProducts();
    }

    /**
     * @param iProductCatalogue $productCatalogue
     * @return Basket
     */
    public function setProductCatalogue(iProductCatalogue $productCatalogue): Basket
    {
        return $this->basket->setProductCatalogue($productCatalogue);
    }

    /**
     * @return iProductCatalogue
     */
    public function getProductsCatalogue(): iProductCatalogue
    {
        return $this->basket->getProductsCatalogue();
    }

    /**
     * @param iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy
     * @return iBasket
     */
    public function setDeliveryChargeRulesStrategy(iDeliveryChargeRulesStrategy $deliveryChargeRulesStrategy): iBasket
    {
        return $this->basket->setDeliveryChargeRulesStrategy($deliveryChargeRulesStrategy);
    }

    /**
     * @return iDeliveryChargeRulesStrategy
     */
    public function getDeliveryChargeRulesStrategy(): iDeliveryChargeRulesStrategy
    {
        return $this->basket->getDeliveryChargeRulesStrategy();
    }

    /**
     * @return iOffersStrategy
     */
    public function getOffersStrategy(): iOffersStrategy
    {
        return $this->basket->getOffersStrategy();
    }

    /**
     * @param iOffersStrategy $offersStrategy
     * @return iBasket
     */
    public function setOffersStrategy(iOffersStrategy $offersStrategy): iBasket
    {
        return $this->basket->setOffersStrategy($offersStrategy);
    }
}