<?php
namespace App\DesignPattern\Creational\Factory\FactoryMethod;

class Cat implements AnimalInterface
{
    const SPECIES = 'cat';
    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}
