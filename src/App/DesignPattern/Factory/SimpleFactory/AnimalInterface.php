<?php
namespace App\DesignPattern\Factory\SimpleFactory;

interface AnimalInterface
{
    /**
     * @return string
     */
    public function getSpecies(): string;
}
