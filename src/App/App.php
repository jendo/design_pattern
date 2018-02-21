<?php
namespace App;

use App\DesignPattern\Singleton\Database;

class App
{

    public function __construct()
    {
    }

    public function run()
    {
        // test singleton
        $db = Database::getInstance();
        $db2 = Database::getInstance();
        var_dump($db === $db2);
    }
}
