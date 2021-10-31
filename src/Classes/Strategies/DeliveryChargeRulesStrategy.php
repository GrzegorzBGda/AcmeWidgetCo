<?php

namespace AcmeWidgetCo\Classes\Strategies;

use AcmeWidgetCo\Classes\Interfaces\iDeliveryChargeRulesStrategy;

class DeliveryChargeRulesStrategy implements iDeliveryChargeRulesStrategy
{
    /**
     * @param int $total
     * @return int
     */
    public function getDeliveryCharge(int $total): int
    {
        switch ($total) {
            case $total < 5000:
                $deliveryCost = 495;
                break;
            case $total < 9000:
                $deliveryCost = 295;
                break;
            case $total >= 9000:
                $deliveryCost = 0;
                break;
            default:
                $deliveryCost = 5000;
        }

        return $deliveryCost;
    }
}