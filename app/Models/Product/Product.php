<?php

namespace App\Models\Product;

use App\Models\Product\Interfaces\ProductTypeInterface;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements ProductTypeInterface
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
