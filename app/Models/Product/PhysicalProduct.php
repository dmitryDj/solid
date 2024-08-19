<?php

namespace App\Models\Product;


class PhysicalProduct extends Product
{

    public function getType(): string
    {
        return 'physical';
    }

    public function getAdditionalAttributes(): array
    {
        return ['weight'];
    }
}
