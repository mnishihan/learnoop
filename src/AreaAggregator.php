<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 2:13 AM
 */

namespace MniShihan\LearnOOP;


use MniShihan\LearnOOP\Interfaces\IArea;

class AreaAggregator implements IArea
{
    private $areas = [];
    public function __construct(IArea ...$areas)
    {
        $this->areas = $areas;
    }

    public function calculateArea() : float {
        return array_reduce($this->areas, function($carry, IArea $area) {
            return $carry + $area->calculateArea();
        }, 0.0);
    }
}