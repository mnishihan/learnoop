<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:12 AM
 */

namespace MniShihan\LearnOOP\Concretes\Shapes;


use MniShihan\LearnOOP\Abstracts\Shape;

class Circle extends Shape
{
    private $radius = 0.0;

    public function __construct(?float $radius)
    {
        parent::__construct();
        if (!is_null($radius)) {
            $this->radius = $radius;
        }
    }

    public function calculateArea(): float
    {
        return M_PI * $this->radius * $this->radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function describe(): string
    {
        return "I am a {$this->getName()} with radius = {$this->radius} and area = {$this->calculateArea()} square units.";
    }

    public function draw(float $x, float $y)
    {
        return "Draw me with center located at {$x}, {$y}";
    }
}