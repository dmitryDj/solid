<?php

namespace App\Repository;

use App\Models\Task as Model;

class TaskRepository extends CoreRepository
{
    protected function getModelClass(): mixed
    {
        return Model::class;
    }

    public function getAllWithPaginate($perPage = 15)
    {
        return $this->startConditions()->paginate($perPage);
    }
}
