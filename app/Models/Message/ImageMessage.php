<?php

namespace App\Models\Message;

use App\Models\Message\Interfaces\ImageMessageInterface;

class ImageMessage extends Message implements ImageMessageInterface
{
    const PLACEHOLDER_URL = 'https://placehold.co/';

    public function setSize(string $size): string
    {
        return self::PLACEHOLDER_URL . $size;
    }
}
