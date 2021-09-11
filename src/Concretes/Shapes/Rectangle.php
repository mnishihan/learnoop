<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 12:56 AM
 */

namespace MniShihan\LearnOOP\Concretes\Shapes;


use MniShihan\LearnOOP\Abstracts\Shape;

class Rectangle extends Shape
{
    private $width = 0.0;
    private $height = 0.0;

    /**
     * Rectangle constructor.
     * @param $width
     * @param $height
     */
    public function __construct(?float $width, ?float $height)
    {
        parent::__construct();
        if (!is_null($width)) {
            $this->width = $width;
        }
        if (!is_null($height)) {
            $this->height = $height;
        }
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function describe(): string
    {
        return "I am a {$this->getName()} with width = {$this->width}, height = {$this->height} and area = {$this->calculateArea()} square units.";
    }
}