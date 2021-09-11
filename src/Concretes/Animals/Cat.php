<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:59 AM
 */

namespace MniShihan\LearnOOP\Concretes\Animals;


use MniShihan\LearnOOP\Abstracts\Animal;

class Cat extends Animal
{
    function speak(): string
    {
        return "Meow";
    }
}