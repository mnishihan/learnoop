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
├── AreaAggregator.php // Utility class to aggregate objects that implements **IArea** interface
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
        ├── IArea.php
        ├── IDescribable.php
        ├── INameable.php
        └── ISpeakable.php

```
