<?php

namespace Povil\Math\Geometry;

class Geometry
{
    public function area(Shape $shape): float
    {
        return $shape->calculateArea();
    }
    public function perimeter(Shape $shape): float
    {
        return $shape->calculatePerimeter();
    }
}
