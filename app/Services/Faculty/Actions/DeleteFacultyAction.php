<?php
namespace App\Services\Faculty\Actions;

use App\Services\Action;
use App\Services\Faculty\Task\DeleteFacultyTask;

class DeteleFacultyAction extends Action{
    public function __construct()
    {
        
    }

    public function delete($id){
        return resolve(DeleteFacultyTask::class)->delete($id);
    }
}