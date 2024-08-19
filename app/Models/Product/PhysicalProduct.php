<?php

namespace App\Models\Product;


class PhysicalProduct extends AbstractProduct
{

    protected $fillable = [
        'product_id',
        'weight'
    ];

    public function getType(): string
    {
        return 'physical';
    }

    public function getAdditionalAttributes(): array
    {
        return ['weight'];
    }
}
