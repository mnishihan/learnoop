<?php
/**
 * Created by PhpStorm.
 * User: shihan
 * Date: 12/9/21
 * Time: 1:51 AM
 */

namespace MniShihan\LearnOOP\Interfaces;


interface Nameable
{
    public function getName() : string;

    public function setName(string $name): void;
}