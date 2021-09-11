<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 2:23 AM
 */

namespace MniShihan\LearnOOP;


use MniShihan\LearnOOP\Interfaces\Describable;

class Describer
{
    public function describe(Describable ...$describes)
    {
        array_walk($describes, function(Describable $describable) {
           echo $describable->describe() . PHP_EOL;
        });
    }
}