<?php

namespace App\Service;

use App\Models\Task;

class TaskService
{
    public function searchByTitleOrDescriptionWithPaginate(string $keyword, int $perPage = 15)
    {
        return Task::where('title', 'like', "%{$keyword}%")
            ->orWhere('description', 'like', "%{$keyword}%")
            ->paginate($perPage);
    }
}
