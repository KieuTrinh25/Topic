<?php
namespace App\Services\Student\Tasks;

use App\Http\Repositories\Student\StudentRepository;
use App\Services\Task;

class CreateStudentTask extends Task
{
    public $repository;
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }
    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }
}
