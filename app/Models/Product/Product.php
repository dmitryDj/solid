<?php

namespace App\Models\Product;

class Product extends AbstractProduct
{
    protected $fillable = [
        'title',
        'description',
        'price',
    ];

    public function getAdditionalAttributes(): array
    {
        return [];
    }
}
