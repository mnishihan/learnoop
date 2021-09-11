<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:02 AM
 */

namespace MniShihan\LearnOOP\Concretes\Shapes;


class Square extends Rectangle
{
    public function __construct(?float $width)
    {
        parent::__construct($width, $width);
    }

    public function describe(): string
    {
        return "I am a {$this->getName()} with width = {$this->getWidth()} and area = {$this->calculateArea()} square units.";
    }
}