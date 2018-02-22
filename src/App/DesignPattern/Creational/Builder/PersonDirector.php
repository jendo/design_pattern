<?php
namespace App\DesignPattern\Creational\Builder;

class PersonDirector
{
    public function build(PersonBuilderInterface $builder)
    {
        $builder->setEmployed();
        $builder->setGender();

        return $builder->getResult();
    }
}
