<?php
namespace App\DesignPattern\Creational\Factory\AbstractFactory;

interface OutputTypeFactoryInterface
{
    /**
     * @return PrettyOutputInterface
     */
    public function prettyOutput(): PrettyOutputInterface;

    /**
     * @return UglyOutputInterface
     */
    public function uglyOutput(): UglyOutputInterface;
}
