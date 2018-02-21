<?php
namespace App\DesignPattern\Factory\AbstractFactory;

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
