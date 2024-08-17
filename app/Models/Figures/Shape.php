<?php

namespace App\Models\Figures;


abstract class Shape {

    abstract public function calculateArea(): float;
    abstract public function calculatePerimeter(): float;
}
