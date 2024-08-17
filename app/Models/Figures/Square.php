<?php

namespace App\Models\Figures;

class Square extends Shape
{
    private float $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function calculateArea(): float
    {
        return $this->side * $this->side;
    }

    public function calculatePerimeter(): float
    {
        return 4 * $this->side;
    }
}
