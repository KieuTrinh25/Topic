<?php
namespace App\Services\SchoolYear\Actions;

use App\Services\Action;
use App\Services\SchoolYear\Tasks\CreateSchoolYearTask;

class CreateSchoolYearAction extends Action
{
    public function __construct()
    {
    }

    public function create(array $attributes){
        return resolve(CreateSchoolYearTask::class)->create($attributes);
    }
}
