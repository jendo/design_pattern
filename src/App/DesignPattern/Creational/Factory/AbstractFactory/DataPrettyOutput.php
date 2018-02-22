<?php
namespace App\DesignPattern\Creational\Factory\AbstractFactory;

class DataPrettyOutput implements PrettyOutputInterface
{

    /**
     * @return string
     */
    public function getPrettyOutput(): string
    {
        return 'This is DATA PRETTY output';
    }
}
