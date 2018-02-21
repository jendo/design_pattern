<?php
namespace App\DesignPattern\Factory\FactoryMethod;

use InvalidArgumentException;

class FarmAnimalFactory
{
    const ERR_CODE_INVALID_ARGUMENT = 1000;

    /**
     * @param string $animal
     * @return AnimalInterface
     */
    public static function factory(string $animal): AnimalInterface
    {
        switch ($animal) {
            case Pig::SPECIES:
                return new Pig();
                break;
            case Chicken::SPECIES:
                return new Chicken();
                break;
            default:
                throw new InvalidArgumentException(
                    sprintf('Farm animal of species: %s does not exist.', $animal),
                    self::ERR_CODE_INVALID_ARGUMENT
                );
        }
    }
}
