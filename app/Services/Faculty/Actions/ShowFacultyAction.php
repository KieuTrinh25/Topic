<?php
namespace App\Services\Faculty\Actions;

use App\Services\Action;
use App\Services\Faculty\Tasks\ShowFacultyTask;

class ShowFacultyAction extends Action{
    public function __construct()
    {
        
    }

    public function run(){
        return resolve(ShowFacultyTask::class)->run();
    }

    public function find($id){
        return resolve(ShowFacultyTask::class)->find($id);
    }
}