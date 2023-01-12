<?php
namespace App\Services\Faculty\Actions;

use App\Services\Action;
use App\Services\Faculty\Tasks\DeleteFacultyTask;

class DeleteFacultyAction extends Action{
    public function __construct()
    {
        
    }

    public function delete($id){
        return resolve(DeleteFacultyTask::class)->delete($id);
    }
}