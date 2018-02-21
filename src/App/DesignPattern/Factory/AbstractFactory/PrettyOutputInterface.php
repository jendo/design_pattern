<?php
namespace App\DesignPattern\Factory\AbstractFactory;

interface PrettyOutputInterface
{
    /**
     * @return string
     */
    public function getPrettyOutput(): string;
}
