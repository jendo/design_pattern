<?php
namespace App\DesignPattern\Creational\Builder;

use App\Entity\Person;

class PersonDirector
{
    /**
     * @param PersonBuilderInterface $builder
     * @return \App\Entity\Person
     */
    public function build(PersonBuilderInterface $builder): Person
    {
        $builder->setEmployed();
        $builder->setGender();

        return $builder->getResult();
    }
}
