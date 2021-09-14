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

    public function calculateArea(): float
    {
        return $this->getWidth() * $this->getWidth();
    }

    /**
     * @inheritDoc
     */
    public function getHeight(): float
    {
        return parent::getWidth();
    }

    /**
     * @inheritDoc
     */
    public function setHeight(float $height): void
    {
        parent::setWidth($height);
    }


    public function describe(): string
    {
        return "I am a {$this->getName()} with width = {$this->getWidth()} and area = {$this->calculateArea()} square units.";
    }
}