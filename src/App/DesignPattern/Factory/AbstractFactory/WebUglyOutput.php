<?php
namespace App\DesignPattern\Factory\AbstractFactory;

class WebUglyOutput implements UglyOutputInterface
{
    /**
     * @return string
     */
    public function getUglyOutput(): string
    {
        return 'This is WEB UGLY output';
    }
}
