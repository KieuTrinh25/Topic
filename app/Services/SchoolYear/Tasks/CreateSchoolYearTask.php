<?php

namespace App\Services\SchoolYear\Tasks;

use App\Http\Repositories\SchoolYear\SchoolYearRepository;
use App\Services\Task;

class CreateSchoolYearTask extends Task
{
    private $repository;

    public function __construct(SchoolYearRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }
}
