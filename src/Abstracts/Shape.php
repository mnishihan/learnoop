<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 12:53 AM
 */

namespace MniShihan\LearnOOP\Abstracts;


use MniShihan\LearnOOP\Interfaces\IArea;

abstract class Shape extends NamedObject implements IArea
{
    public function describe(): string
    {
        return "{$this->getName()} with area {$this->calculateArea()} square units.";
    }
}