<?php
namespace App\DesignPattern\Creational\Prototype;

class PHPBookPrototype extends BookPrototypeAbstract
{
    static $instances = 0;

    private $instance;

    public function __construct()
    {
        $this->topic = 'PHP';
        $this->instance = ++self::$instances;
    }

    /**
     * @return BookPrototypeAbstract
     */
    public function __clone()
    {

    }
}
