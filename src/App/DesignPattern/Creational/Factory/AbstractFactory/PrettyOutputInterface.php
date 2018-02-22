<?php
namespace App\DesignPattern\Creational\Factory\AbstractFactory;

interface PrettyOutputInterface
{
    /**
     * @return string
     */
    public function getPrettyOutput(): string;
}
