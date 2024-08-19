<?php

namespace App\Models\Product;

class Product extends AbstractProduct
{
    protected $fillable = [
        'title',
        'description',
        'price',
    ];

    public function getType(): string
    {
        return 'product';
    }

    public function getAdditionalAttributes(): array
    {
        return [];
    }
}
