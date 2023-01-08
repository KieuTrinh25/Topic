<?php
namespace App\Services\Semester\Actions;

use App\Services\Action;
use App\Services\Semester\Tasks\UpdateSemesterTask;

class UpdateSemesterAction extends Action{
    public function __construct()
    {
        
    }
    public function update($id,array $attributes){
        return resolve(UpdateSemesterTask::class)->update($id,$attributes);
    }
    

}