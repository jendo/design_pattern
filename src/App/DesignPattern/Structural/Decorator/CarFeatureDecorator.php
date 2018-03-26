<?php
namespace App\DesignPattern\Structural\Decorator;

abstract class CarFeatureDecorator implements CarInterface
{
    /**
     * @var CarInterface
     */
    protected $car;

    /**
     * @param CarInterface $car
     */
    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    /**
     * @return string
     */
    abstract function getBrand(): string;

    /**
     * @return string
     */
    abstract function getType(): string;

    /**
     * @return array
     */
    abstract function getEquipments(): array;

    /**
     * @return int
     */
    abstract function getPrice(): int;
}
