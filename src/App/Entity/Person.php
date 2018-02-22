<?php

namespace App\Entity;

class Person
{
    const GENDER_MALE = "Male";
    const GENDER_FEMALE = "Female";

    /**
     * @var bool
     */
    private $isEmployed;

    /**
     * @var string
     */
    private $gender;

    /**
     * @return bool
     */
    public function isEmployed(): bool
    {
        return $this->isEmployed;
    }

    /**
     * @param bool $isEmployed
     */
    public function setIsEmployed($isEmployed)
    {
        $this->isEmployed = $isEmployed;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
