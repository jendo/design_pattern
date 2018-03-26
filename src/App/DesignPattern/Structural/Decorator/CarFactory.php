<?php
namespace App\DesignPattern\Structural\Decorator;

use InvalidArgumentException;

class CarFactory
{
    /**
     * @param string $carBrand
     * @return CarInterface
     */
    public function create(string $carBrand)
    {
        switch ($carBrand) {
            case CarBrands::SKODA_OCTAVIA:
                return new Car(CarBrands::SKODA_OCTAVIA, CarTypes::SEDAN, 22000, CarEquipment::BASIC);
                break;
            case CarBrands::BMW_X5:
                return new Car(CarBrands::BMW_X5, CarTypes::SUV, 40000, CarEquipment::BASIC);
                break;
            default:
                throw new InvalidArgumentException(
                    sprintf('Unsupported car brand: %s', $carBrand)
                );
        }
    }
}
