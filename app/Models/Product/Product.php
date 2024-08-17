<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
    ];
}
