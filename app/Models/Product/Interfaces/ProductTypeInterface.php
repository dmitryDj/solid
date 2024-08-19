<?php

namespace App\Models\Product\Interfaces;


interface ProductTypeInterface
{
    public function getType(): string;
    public function getAdditionalAttributes(): array;
}
