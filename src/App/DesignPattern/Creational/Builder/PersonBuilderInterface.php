<?php
namespace App\DesignPattern\Creational\Builder;

use App\Entity\Person;

interface PersonBuilderInterface
{
    /**
     * @return void
     */
    public function setGender();

    /**
     * @return void
     */
    public function setEmployed();

    /**
     * @return Person
     */
    public function getResult();
}
