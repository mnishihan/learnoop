<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 12:53 AM
 */

namespace MniShihan\LearnOOP\Abstracts;


use MniShihan\LearnOOP\Interfaces\Area;

abstract class Shape extends NamedObject implements Area
{
    public function describe(): string
    {
        return "{$this->getName()} with area {$this->calculateArea()} square units.";
    }
}