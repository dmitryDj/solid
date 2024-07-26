<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;

abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected Model $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass(): mixed;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Model|Application|mixed
     */
    protected function startConditions(): mixed
    {
        return clone $this->model;
    }
}
