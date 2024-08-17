<?php

namespace App\Models\Message\Interfaces;

interface TextMessageInterface
{
    public function trimText(string $str): string;
    public function capitalizeText(string $str): string;
}
