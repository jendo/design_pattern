<?php

namespace App\DesignPattern\Singleton;

class Database
{

    private static $instance;

    /**
     * Private constructor to prevent multiple instantiations
     */
    private function __construct()
    {
    }

    /**
     * @return Database
     */
    public static function getInstance(): Database
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Private clone to make sure an instance this class can not be cloned using the clone keyword
     */
    private function __clone()
    {
    }
}
