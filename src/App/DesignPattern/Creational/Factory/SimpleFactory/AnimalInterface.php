<?php
namespace App\DesignPattern\Creational\Factory\SimpleFactory;

interface AnimalInterface
{
    /**
     * @return string
     */
    public function getSpecies(): string;
}
