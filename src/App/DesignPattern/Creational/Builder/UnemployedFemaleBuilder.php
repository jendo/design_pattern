<?php
namespace App\DesignPattern\Creational\Builder;

use App\Entity\Person;
use App\Entity\PersonFactory;

class UnemployedFemaleBuilder implements PersonBuilderInterface
{
    /**
     * @var Person
     */
    private $person;

    /**
     * @param PersonFactory $personFactory
     */
    public function __construct(PersonFactory $personFactory)
    {
        $this->person = $personFactory->create();
    }

    /**
     * @return void
     */
    public function setGender()
    {
        $this->person->setGender(Person::GENDER_FEMALE);
    }

    /**
     * @return void
     */
    public function setEmployed()
    {
        $this->person->setIsEmployed(false);
    }

    /**
     * @return Person
     */
    public function getResult(): Person
    {
        return $this->person;
    }
}
