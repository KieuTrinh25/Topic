<?php
namespace App\Services\Semester\Actions;

use App\Services\Action;
use App\Services\Semester\Tasks\CreateSemesterTask;

class CreateSemesterAction extends Action
{
    public function __construct()
    {
    }

    public function create(array $attributes){
        return resolve(CreateSemesterTask::class)->create($attributes);
    }
}
