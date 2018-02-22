<?php
namespace App\Entity;

class PersonFactory
{
    public function create()
    {
        return new Person();
    }
}
