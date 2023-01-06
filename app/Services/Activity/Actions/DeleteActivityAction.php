<?php
namespace App\Services\Activity\Actions;

use App\Services\Action;
use App\Services\Activity\Tasks\DeleteActivityTask;

class DeleteActivityAction extends Action{
    public function __construct()
    {
        
    }
    public function delete($id){
        return resolve(DeleteActivityTask::class)->delete($id);
    }

}