<?php
namespace App\DesignPattern\Factory\AbstractFactory;

class WebPrettyOutput implements PrettyOutputInterface
{

    /**
     * @return string
     */
    public function getPrettyOutput(): string
    {
        return 'This is WEB PRETTY output';
    }
}
