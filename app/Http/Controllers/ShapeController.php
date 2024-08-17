<?php

namespace App\Http\Controllers;

use App\Models\Figures\Circle;
use App\Models\Figures\Rectangle;
use App\Models\Figures\Square;

class ShapeController extends Controller
{
    public function getArea(): string
    {
        $rectangle = new Rectangle(10, 5);
        $square = new Square(5);
        $circle = new Circle(15);

        return 'Площадь прямоугольника - ' . $rectangle->calculateArea();
//        return 'Площадь квадрата - ' . $square->calculateArea();
//        return 'Площадь круга - ' . $circle->calculateArea();
    }

    public function getPerimeter()
    {
        $rectangle = new Rectangle(10, 5);
        $square = new Square(5);
        $circle = new Circle(15);

        return 'Периметр прямоугольника - ' . $rectangle->calculatePerimeter();
//        return 'Периметр квадрата - ' . $square->calculatePerimeter();
//        return 'Периметр круга - ' . $circle->calculatePerimeter();
    }
}
