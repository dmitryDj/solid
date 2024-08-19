<?php

namespace App\Models\Product;


class DigitalProduct extends Product
{

    public function getType(): string
    {
        return 'digital';
    }

    public function getAdditionalAttributes(): array
    {
        return ['download_link'];
    }
}
