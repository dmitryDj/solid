<?php

namespace App\Service;



use App\Models\Product\DigitalProduct;
use App\Models\Product\PhysicalProduct;

class ProductService
{
    public function createProduct($productModel, array $data)
    {
        return match(true) {
            $productModel instanceof PhysicalProduct => $productModel::create($data),
            $productModel instanceof DigitalProduct => $productModel::create($data),
            default => throw new \Exception("Invalid product type"),
         };
    }
}
