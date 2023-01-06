<?php
namespace App\Services\Activity\Actions;

use App\Services\Action;
use App\Services\Activity\Tasks\UpdateActivityTask;

class UpdateActivityAction extends Action{
    public function __construct()
    {
        
    }
    public function update($id,array $attributes){
        return resolve(UpdateActivityTask::class)->update($id,$attributes);
    }
    

}