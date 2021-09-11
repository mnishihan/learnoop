<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 2:13 AM
 */

namespace MniShihan\LearnOOP;


use MniShihan\LearnOOP\Interfaces\Area;

class AreaCalculator
{
    public function calculate(Area ...$areas) : float {
        return array_reduce($areas, function($carry, Area $area) {
            return $carry + $area->calculateArea();
        }, 0.0);
    }
}