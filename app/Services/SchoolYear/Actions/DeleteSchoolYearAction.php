<?php
namespace App\Services\SchoolYear\Actions;

use App\Services\Action;
use App\Services\SchoolYear\Tasks\DeleteSchoolYearTask;

class DeleteSchoolYearAction extends Action{
    public function __construct()
    {
        
    }
    public function delete($id){
        return resolve(DeleteSchoolYearTask::class)->delete($id);
    }

}