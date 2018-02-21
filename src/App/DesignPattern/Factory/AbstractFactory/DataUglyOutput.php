<?php
namespace App\DesignPattern\Factory\AbstractFactory;

class DataUglyOutput implements UglyOutputInterface
{
    /**
     * @return string
     */
    public function getUglyOutput(): string
    {
        return 'This is DATA UGLY output';
    }
}
