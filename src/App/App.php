<?php
namespace App;

use App\DesignPattern\Factory\AbstractFactory\DataOutputTypeFactory;
use App\DesignPattern\Factory\AbstractFactory\WebOutputTypeFactory;
use App\DesignPattern\Factory\FactoryMethod\FarmAnimalFactory;
use App\DesignPattern\Factory\FactoryMethod\PetAnimalFactory;
use App\DesignPattern\Factory\FactoryMethod\Pig;
use App\DesignPattern\Factory\SimpleFactory\AnimalFactory;
use App\DesignPattern\Factory\SimpleFactory\Dog;
use App\DesignPattern\Singleton\Database;
use InvalidArgumentException;

class App
{

    public function __construct()
    {
    }

    /**
     *
     */
    public function run()
    {
        // singleton
        $db = Database::getInstance();
        $db2 = Database::getInstance();
        var_dump($db === $db2);

        // simple factory
        try {
            $dog = AnimalFactory::factory(Dog::SPECIES);
            var_dump($dog->getSpecies());

            $dummyAnimal = AnimalFactory::factory('dummyAnimal');
        } catch (InvalidArgumentException $e) {
            var_dump($e->getMessage());
        }

        // factory method
        try {
            $pig = FarmAnimalFactory::factory(Pig::SPECIES);
            var_dump($pig->getSpecies());

            $dog = PetAnimalFactory::factory(Dog::SPECIES);
            var_dump($dog->getSpecies());

            $dummyAnimal = PetAnimalFactory::factory('dummyPetAnimal');
        } catch (InvalidArgumentException $e) {
            var_dump($e->getMessage());
        }

        // abstract factory
        $webOutputFactory = new WebOutputTypeFactory();
        $dataOutputFactory = new DataOutputTypeFactory();

        var_dump($webOutputFactory->prettyOutput()->getPrettyOutput());
        var_dump($webOutputFactory->uglyOutput()->getUglyOutput());

        var_dump($dataOutputFactory->prettyOutput()->getPrettyOutput());
        var_dump($dataOutputFactory->uglyOutput()->getUglyOutput());

    }
}
