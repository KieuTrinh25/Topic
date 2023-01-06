<?php
namespace App\Services\Activity\Actions;

use App\Services\Action;
use App\Services\Activity\Tasks\CreateActivityTask;

class CreateActivityAction extends Action
{
    public function __construct()
    {
    }

    public function create(array $attributes){
        return resolve(CreateActivityTask::class)->create($attributes);
    }
}
