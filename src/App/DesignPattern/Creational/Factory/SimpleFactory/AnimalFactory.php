<?php
namespace App\DesignPattern\Creational\Factory\SimpleFactory;

use InvalidArgumentException;

class AnimalFactory
{
    const ERR_CODE_INVALID_ARGUMENT = 1000;

    /**
     * @param string $animal
     * @return AnimalInterface
     */
    public static function factory(string $animal): AnimalInterface
    {
        switch ($animal) {
            case Dog::SPECIES:
                return new Dog();
                break;
            case Cat::SPECIES:
                return new Cat();
                break;
            default:
                throw new InvalidArgumentException(
                    sprintf('Animal of species: %s does not exist.', $animal),
                    self::ERR_CODE_INVALID_ARGUMENT
                );
        }
    }
}
