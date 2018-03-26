<?php
namespace App\DesignPattern\Structural\Decorator;

class Car implements CarInterface
{
    /**
     * @var int
     */
    private $price;

    /**
     * @var array
     */
    private $equipments;

    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $brand;

    /**
     * @param string $brand
     * @param string $type
     * @param int $price
     * @param array $equipments
     */
    public function __construct(string $brand, string $type, int $price, array $equipments)
    {
        $this->type = $type;
        $this->price = $price;
        $this->equipments = $equipments;
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getEquipments(): array
    {
        return $this->equipments;
    }
}
