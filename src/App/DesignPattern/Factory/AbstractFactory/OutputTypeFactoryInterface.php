<?php
namespace App\DesignPattern\Factory\AbstractFactory;

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
