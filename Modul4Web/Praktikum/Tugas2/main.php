<?php

require_once 'Shape.php';
require_once 'ShapeProperties.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

use Shapes\Rectangle;
use Shapes\Circle;

$rectangle = new Rectangle('Rectangle', 'Red', 5, 10);
$rectangle->setBorder(2, 'Black');

$circle = new Circle('Circle', 'Blue', 7);
$circle->setBorder(1, 'Green');

echo "Area of Rectangle: {$rectangle->calculateArea()} square units\n";
echo "Border Color of Rectangle: {$rectangle->getBorderColor()}\n";

echo "Area of circle: {$circle->calculateArea()} square units\n";

echo "Border Color of circle: {$circle->getBorderColor()}\n";
