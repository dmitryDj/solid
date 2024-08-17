<?php

namespace App\Models\Message\Interfaces;

interface TextMessageInterface
{
    public function trimText(): string;
    public function capitalizeText(): string;
}
