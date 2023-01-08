<?php
namespace App\Services\SchoolYear\Actions;

use App\Services\Action;
use App\Services\SchoolYear\Tasks\UpdateSchoolYearTask;

class UpdateSchoolYearAction extends Action{
    public function __construct()
    {
        
    }
    public function update($id,array $attributes){
        return resolve(UpdateSchoolYearTask::class)->update($id,$attributes);
    }
    

}