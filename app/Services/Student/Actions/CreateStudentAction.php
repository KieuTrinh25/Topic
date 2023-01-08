<?php
namespace App\Services\Student\Actions;

use App\Services\Action;
use App\Services\Student\Tasks\CreateStudentTask;

class CreateStudentAction extends Action
{
    public function __construct()
    {

    }
    public function create(array $attributes)
    {
        return resolve(CreateStudentTask::class)->create($attributes);
    }
}
