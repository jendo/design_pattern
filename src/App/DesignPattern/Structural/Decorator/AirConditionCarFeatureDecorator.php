<?php
namespace App\DesignPattern\Structural\Decorator;

class AirConditionCarFeatureDecorator extends CarFeatureDecorator
{
    const FEATURE_NAME = CarFeatures::AIR_CONDITION;
    const FEATURE_PRICE = 900;

    /**
     * @return string
     */
    function getBrand(): string
    {
        return $this->car->getBrand();
    }

    /**
     * @return string
     */
    function getType(): string
    {
        return $this->car->getType();
    }

    /**
     * @return array
     */
    function getEquipments(): array
    {
        return array_merge($this->car->getEquipments(), [self::FEATURE_NAME]);
    }

    /**
     * @return int
     */
    function getPrice(): int
    {
        return $this->car->getPrice() + self::FEATURE_PRICE;
    }
}
