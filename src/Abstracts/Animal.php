<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:50 AM
 */

namespace MniShihan\LearnOOP\Abstracts;

use MniShihan\LearnOOP\Interfaces\ISpeakable;

abstract class Animal extends NamedObject implements ISpeakable
{
    private $age = 0.0;

    public function __construct(?float $age)
    {
        parent::__construct();
        if (!is_null($age)) {
            $this->age = $age;
        }
    }

    /**
     * @return float
     */
    public function getAge(): float
    {
        return $this->age;
    }

    /**
     * @param float $age
     */
    public function setAge(float $age): void
    {
        $this->age = $age;
    }

    public function describe(): string
    {
        return "I am an animal with name = {$this->getName()}, I am {$this->age} years old and I speak like {$this->speak()}.";
    }
}