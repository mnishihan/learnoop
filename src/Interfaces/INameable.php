<?php

namespace MniShihan\LearnOOP\Interfaces;


interface INameable
{
    public function getName() : string;

    public function setName(string $name): void;
}