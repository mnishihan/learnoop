<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 2:13 AM
 */

namespace MniShihan\LearnOOP;


use MniShihan\LearnOOP\Interfaces\IArea;

class AreaCalculator
{
    public function calculate(IArea ...$areas) : float {
        return array_reduce($areas, function($carry, IArea $area) {
            return $carry + $area->calculateArea();
        }, 0.0);
    }
}