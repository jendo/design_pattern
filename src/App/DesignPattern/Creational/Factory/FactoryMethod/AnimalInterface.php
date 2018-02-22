<?php
namespace App\DesignPattern\Creational\Factory\FactoryMethod;

interface AnimalInterface
{
    /**
     * @return string
     */
    public function getSpecies(): string;
}
