<?php

namespace App\Exports;

abstract class Export
{
    public abstract static function export($data, string $filename);
}
