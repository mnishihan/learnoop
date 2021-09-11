<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:22 AM
 */

namespace MniShihan\LearnOOP\Concretes\Shapes;


use MniShihan\LearnOOP\Abstracts\Shape;

class Triangle extends Shape
{
    private $base = 0.0;
    private $height = 0.0;

    /**
     * Triangle constructor.
     * @param float $base
     * @param float $height
     */
    public function __construct(?float $base, ?float $height)
    {
        parent::__construct();
        if(!is_null($base)) {
            $this->base = $base;
        }

        if(!is_null($height)) {
            $this->height = $height;
        }
    }

    public function calculateArea(): float
    {
        return $this->base * $this->height / 2;
    }

}