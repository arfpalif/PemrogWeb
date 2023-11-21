<?php

namespace Shapes;

class Rectangle extends Shape
{
    use ShapeProperties;

    protected $width;
    protected $height;

    public function __construct($name, $color, $width, $height){
    parent::__construct($name, $color);
    $this->width = $width;
    $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
