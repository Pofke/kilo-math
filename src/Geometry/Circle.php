<?php

namespace Povil\Math\Geometry;

class Circle implements Shape
{
    public function __construct(private float $radius)
    {
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function calculateArea(): float
    {
        return pow($this->radius, 2) * 3.14;
    }

    public function calculatePerimeter(): float
    {
        return $this->radius * 2 * 3.14;
    }
}
