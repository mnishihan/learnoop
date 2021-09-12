<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:53 AM
 */

namespace MniShihan\LearnOOP\Abstracts;


use MniShihan\LearnOOP\Interfaces\IDescribable;
use MniShihan\LearnOOP\Interfaces\INameable;

class NamedObject implements INameable, IDescribable
{
    private $name = "Unknown";

    /**
     * Shape constructor.
     */
    public function __construct()
    {
        $this->name = substr(static::class, strrpos(static::class, '\\')+1);
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function describe(): string
    {
        return "I have a name = {$this->getName()}.";
    }
}