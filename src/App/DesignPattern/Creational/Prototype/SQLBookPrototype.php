<?php
namespace App\DesignPattern\Creational\Prototype;

class SQLBookPrototype extends BookPrototypeAbstract
{
    public function __construct()
    {
        $this->topic = 'PHP';
    }

    /**
     * @return BookPrototypeAbstract
     */
    public function __clone()
    {

    }
}
