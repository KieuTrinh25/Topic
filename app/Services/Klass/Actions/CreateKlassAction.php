<?php
namespace App\Services\Klass\Actions;

use App\Services\Action;
use App\Services\Klass\Tasks\CreateKlassTask;

class CreateKlassAction extends Action
{
    public function __construct()
    {
    }

    public function create(array $attributes){
        return resolve(CreateKlassTask::class)->create($attributes);
    }
}
