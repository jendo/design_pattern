<?php
namespace App\DesignPattern\Creational\Factory\SimpleFactory;

class Dog implements AnimalInterface
{
    const SPECIES = 'dog';

    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}
