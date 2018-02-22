<?php
namespace App\DesignPattern\Creational\Factory\AbstractFactory;

class DataOutputTypeFactory implements  OutputTypeFactoryInterface
{
    /**
     * @return PrettyOutputInterface
     */
    public function prettyOutput(): PrettyOutputInterface
    {
        return new DataPrettyOutput();
    }

    /**
     * @return UglyOutputInterface
     */
    public function uglyOutput(): UglyOutputInterface
    {
        return new DataUglyOutput();
    }
}
