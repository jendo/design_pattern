<?php
namespace App\DesignPattern\Factory\SimpleFactory;

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
