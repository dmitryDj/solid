<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractProduct extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
    ];

    abstract public function getType();

    abstract public function getAdditionalAttributes();
}
