<?php
namespace App\Services\Student\Actions;

use App\Services\Action;
use App\Services\Student\Tasks\ShowStudentTask;

class ShowStudentAction extends Action
{
    public function __construct()
    {

    }
    public function run(){
        return resolve(ShowStudentTask::class)->run();
    }
    public function find($id){
        return resolve(ShowStudentTask::class)->find($id);
    }
    // public function getStudentByName($name){
    //     return resolve(ShowStudentTask::class)->getStudentByName($name);
    // }
}
