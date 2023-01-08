<?php

namespace App\Services\Semester\Tasks;

use App\Http\Repositories\Semester\SemesterRepository;
use App\Services\Task;

class CreateSemesterTask extends Task
{
    private $repository;

    public function __construct(SemesterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }
}
