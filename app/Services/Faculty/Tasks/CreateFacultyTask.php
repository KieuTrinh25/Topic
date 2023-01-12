<?php

namespace App\Services\Faculty\Tasks;

use App\Http\Repositories\Faculty\FacultyRepository;
use App\Services\Task;

class CreateFacultyTask extends Task
{
    private $repository;

    public function __construct(FacultyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }
}
