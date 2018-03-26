<?php
namespace App\DesignPattern\Structural\Decorator;

interface CarInterface
{
    /**
     * @return string
     */
    public function getBrand(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return array
     */
    public function getEquipments(): array;
}
