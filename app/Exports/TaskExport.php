<?php

namespace App\Exports;

class TaskExport extends Export
{
    public static function export($data, string $filename)
    {
        dd("Логика экспорта, '{$data->count()}' tasks имя файла - {$filename}");
    }
}
