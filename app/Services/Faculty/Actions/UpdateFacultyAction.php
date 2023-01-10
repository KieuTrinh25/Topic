<?php
namespace App\Services\Faculty\Actions;

use App\Services\Action;
use App\Services\Faculty\Tasks\UpdateFacultyTask;

class UpdateFacultyAction extends Action{
    public function __construct()
    {
        
    }

    public function update($id,array $attributes){
        return resolve(UpdateFacultyTask::class)->update($id,$attributes);
    }
}