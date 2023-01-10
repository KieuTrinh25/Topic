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

    public function getSingleFaculty($id){
        return resolve(ShowFacultyTask::class)->getSingleFaculty($id);
    }

    public function getFacultyBySlug($slug){
        return resolve(ShowFacultyTask::class)->getFacultyBySlug($slug);
    }

    public function getFacultyByName($name){
        return resolve(ShowFacultyTask::class)->getFacultyByName($name);
    }
}