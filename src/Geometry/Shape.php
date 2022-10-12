<?php

namespace Povil\Math\Geometry;

interface Shape
{
    public function calculateArea(): float;
    public function calculatePerimeter(): float;
}
