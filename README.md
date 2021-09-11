# Learn OOP

Demonstration of OOP concepts and usage of Abstract class &amp; Interfaces

# Usage

* clone this repo
* run `composer install`
* run `php index.php`

# Code structure

```
src
├── Abstracts // contains all abstract classes
│   ├── Animal.php
│   ├── NamedObject.php
│   └── Shape.php
├── AreaCalculator.php // Utility class to calculate sum of objects that implements **Area** interface 
├── Concretes
│   ├── Animals
│   │   ├── Cat.php
│   │   ├── Cow.php
│   │   └── Dog.php
│   └── Shapes
│       ├── Circle.php
│       ├── Rectangle.php
│       ├── Square.php
│       └── Triangle.php
├── Describer.php // Utility class to describe all objects that implements **Describable** interface
└── Interfaces
    ├── Area.php
    ├── Describable.php
    ├── Nameable.php
    └── Speakable.php
    
```
