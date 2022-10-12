<?php

namespace Povil\Math\Geometry;

class Square implements Shape
{
    public function __construct(private float $side)
    {
    }

    public function getSide(): float
    {
        return $this->side;
    }

    public function calculateArea(): float
    {
        return pow($this->side, 2);
    }

    public function calculatePerimeter(): float
    {
        return $this->side * 4;
    }
}
