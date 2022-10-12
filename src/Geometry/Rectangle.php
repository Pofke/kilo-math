<?php

namespace Povil\Math\Geometry;

class Rectangle implements Shape
{
    public function __construct(private float $width, private float $height)
    {
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }
}
