<?php

namespace App\Models\Message\Interfaces;

interface VideoMessageInterface
{
    public function setVideoHost(string $videoUrl): string;
}
