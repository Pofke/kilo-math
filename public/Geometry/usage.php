<?php

require_once '../../vendor/autoload.php';


use Povil\Math\Geometry\Circle;
use Povil\Math\Geometry\Rectangle;
use Povil\Math\Geometry\Rhombus;
use Povil\Math\Geometry\Square;
use Povil\Math\Geometry\Geometry;

$geometry = new Geometry();

$circle = new Circle(12);
$square = new Square(8);
$rectangle = new Rectangle(8, 2);
$rhombus = new Rhombus(8, 2);

const NEW_LINE = '<br/>';

echo "circle: " . NEW_LINE;
echo "radius: " . $circle->getRadius() . NEW_LINE;
echo "area: " . $geometry->area($circle) . NEW_LINE;
echo "perimeter: " . $geometry->perimeter($circle) . NEW_LINE . NEW_LINE;

echo "square: " . NEW_LINE;
echo "side: " . $square->getSide() . NEW_LINE;
echo "area: " . $geometry->area($square) . NEW_LINE;
echo "perimeter: " . $geometry->perimeter($square) . NEW_LINE . NEW_LINE;

echo "rectangle: " . NEW_LINE;
echo "height: " . $rectangle->getHeight() . NEW_LINE;
echo "width: " . $rectangle->getWidth() . NEW_LINE;
echo "area: " . $geometry->area($rectangle) . NEW_LINE;
echo "perimeter: " . $geometry->perimeter($rectangle) . NEW_LINE . NEW_LINE;

echo "rhombus: " . NEW_LINE;
echo "base: " . $rhombus->getBase() . NEW_LINE;
echo "height: " . $rhombus->getHeight() . NEW_LINE;
echo "area: " . $geometry->area($rhombus) . NEW_LINE;
echo "perimeter: " . $geometry->perimeter($rhombus) . NEW_LINE . NEW_LINE;
