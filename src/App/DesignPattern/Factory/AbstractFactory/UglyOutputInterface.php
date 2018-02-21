<?php
namespace App\DesignPattern\Factory\AbstractFactory;

interface UglyOutputInterface
{
    /**
     * @return string
     */
    public function getUglyOutput(): string;
}
