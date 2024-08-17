<?php

namespace App\Models\Figures;

class Circle extends Shape
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}
