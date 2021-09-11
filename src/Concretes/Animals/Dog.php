<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 2:04 AM
 */

namespace MniShihan\LearnOOP\Concretes\Animals;


use MniShihan\LearnOOP\Abstracts\Animal;

class Dog extends Animal
{
    public function speak(): string
    {
        return "woof";
    }
}