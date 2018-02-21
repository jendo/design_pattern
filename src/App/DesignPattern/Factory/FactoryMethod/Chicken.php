<?php
namespace App\DesignPattern\Factory\FactoryMethod;

class Chicken implements AnimalInterface
{
    const SPECIES = 'chicken';
    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}
