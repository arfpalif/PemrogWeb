<?php

namespace Shapes;

class Circle extends Shape
{
    use ShapeProperties;

    protected $radius;

    public function __construct($name, $color, $radius)
{
    parent::__construct($name, $color);
    $this->radius = $radius;
}

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
