<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy;

class DeliveryChargeRulesStrategy implements iDeliveryChargeRulesStrategy
{
    /**
     * @param float $total
     * @return float
     */
    public function getDeliveryCharge(float $total): float
    {
        switch ($total) {
            case $total < 50:
                $deliveryCost = 4.95;
                break;
            case $total < 90:
                $deliveryCost = 2.95;
                break;
            case $total >= 90:
                $deliveryCost = 0;
                break;
            default:
                $deliveryCost = 50;
        }

        return $deliveryCost;
    }
}