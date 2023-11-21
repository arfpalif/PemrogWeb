<?php

namespace Shapes;

abstract class Shape
{
    protected $name;
    protected $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    abstract public function calculateArea();
}
