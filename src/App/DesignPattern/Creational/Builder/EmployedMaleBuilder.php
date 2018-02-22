<?php
namespace App\DesignPattern\Creational\Builder;

use App\Entity\Person;
use App\Entity\PersonFactory;

class EmployedMaleBuilder implements PersonBuilderInterface
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
        $this->person->setGender(Person::GENDER_MALE);
    }

    /**
     * @return void
     */
    public function setEmployed()
    {
        $this->person->setIsEmployed(true);
    }

    /**
     * @return Person
     */
    public function getResult(): Person
    {
        return $this->person;
    }
}
