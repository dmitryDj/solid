<?php

namespace App\Models\Product;


class PhysicalProduct extends AbstractProduct
{

    protected $fillable = [
        'product_id',
        'weight'
    ];

    public function getAdditionalAttributes(): array
    {
        return ['weight'];
    }
}
