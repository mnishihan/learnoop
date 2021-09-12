<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 2:23 AM
 */

namespace MniShihan\LearnOOP;


use MniShihan\LearnOOP\Interfaces\IDescribable;

class Describer
{
    public function describe(IDescribable ...$describes)
    {
        array_walk($describes, function(IDescribable $describable) {
           echo $describable->describe() . PHP_EOL;
        });
    }
}