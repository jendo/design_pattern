<?php
namespace App\DesignPattern\Creational\Prototype;

abstract class BookPrototypeAbstract
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $topic;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

}
