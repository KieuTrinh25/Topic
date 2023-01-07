<?php
namespace App\Services\Klass\Actions;

use App\Services\Action;
use App\Services\Klass\Tasks\UpdateKlassTask;

class UpdateKlassAction extends Action{
    public function __construct()
    {
        
    }
    public function update($id,array $attributes){
        return resolve(UpdateKlassTask::class)->update($id,$attributes);
    }
    

}