<?php
namespace App\DesignPattern\Factory\FactoryMethod;

interface AnimalInterface
{
    /**
     * @return string
     */
    public function getSpecies(): string;
}
