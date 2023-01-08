<?php
namespace App\Services\Faculty\Actions;

use App\Services\Action;
use App\Services\Faculty\Task\CreateFacultyTask;

class CreateFacultyAction extends Action{
    public function __construct()
    {
        
    }

    public function create(array $attributes){
        return resolve(CreateFacultyTask::class)->create($attributes);
    }
}