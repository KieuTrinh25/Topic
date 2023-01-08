<?php
namespace App\Services\Semester\Actions;

use App\Services\Action;
use App\Services\Semester\Tasks\DeleteSemesterTask;

class DeleteSemesterAction extends Action{
    public function __construct()
    {
        
    }
    public function delete($id){
        return resolve(DeleteSemesterTask::class)->delete($id);
    }

}