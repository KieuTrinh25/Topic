<?php

namespace App\Services\Klass\Tasks;

use App\Http\Repositories\Klass\KlassRepository;
use App\Services\Task;

class CreateKlassTask extends Task
{
    private $repository;

    public function __construct(KlassRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }
}
