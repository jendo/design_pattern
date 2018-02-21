<?php
namespace App\DesignPattern\Factory\AbstractFactory;

class WebOutputTypeFactory implements  OutputTypeFactoryInterface
{

    /**
     * @return PrettyOutputInterface
     */
    public function prettyOutput(): PrettyOutputInterface
    {
        return new WebPrettyOutput();
    }

    /**
     * @return UglyOutputInterface
     */
    public function uglyOutput(): UglyOutputInterface
    {
        return new WebUglyOutput();
    }
}
