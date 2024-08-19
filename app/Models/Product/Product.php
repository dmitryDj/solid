<?php

namespace App\Models\Product;

use App\Models\Product\Interfaces\ProductTypeInterface;
use Illuminate\Database\Eloquent\Model;

abstract class Product extends Model implements ProductTypeInterface
{
    protected Model $product;

    public function __construct(Model $product, array $attributes = [])
    {
        parent::__construct($attributes);
        $this->product = $product;
    }

    protected $fillable = [
        'title',
        'description',
        'price',
        'weight',
        'download_link'
    ];

    abstract public function getType(): string;

    abstract public function getAdditionalAttributes(): array;
}
