<?php

namespace Povil\Math\Geometry;

class Rhombus implements Shape
{
    public function __construct(private float $base, private float $height)
    {
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function calculateArea(): float
    {
        return $this->base * $this->height;
    }

    public function calculatePerimeter(): float
    {
        return $this->base * 4;
    }
}
