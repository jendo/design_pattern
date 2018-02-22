<?php
namespace App\DesignPattern\Creational\Factory\FactoryMethod;

class Pig implements AnimalInterface
{
    const SPECIES = 'pig';
    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}
