<?php

require_once('./vendor/autoload.php');

$rectangle = new \MniShihan\LearnOOP\Concretes\Shapes\Rectangle(2, 4);
$circle = new \MniShihan\LearnOOP\Concretes\Shapes\Circle(2);
$square = new \MniShihan\LearnOOP\Concretes\Shapes\Square(5);
$triangle = new \MniShihan\LearnOOP\Concretes\Shapes\Triangle(4, 2.5);

$cow = new \MniShihan\LearnOOP\Concretes\Animals\Cow(2);
$cat = new \MniShihan\LearnOOP\Concretes\Animals\Cat(1.2);
$dog = new \MniShihan\LearnOOP\Concretes\Animals\Dog(3);

$areaCalculator = new MniShihan\LearnOOP\AreaCalculator();

echo "Sum of all areas = " . $areaCalculator->calculate($rectangle, $circle, $square, $triangle) . PHP_EOL;

$describer = new \MniShihan\LearnOOP\Describer();

$describer->describe($rectangle, $circle, $square, $triangle, $cow, $cat, $dog);

