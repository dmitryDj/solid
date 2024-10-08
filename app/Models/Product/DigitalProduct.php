<?php

namespace App\Models\Product;


class DigitalProduct extends AbstractProduct
{

    protected $fillable = [
        'product_id',
        'link'
    ];

    public function getAdditionalAttributes(): array
    {
        return ['link'];
    }
}
