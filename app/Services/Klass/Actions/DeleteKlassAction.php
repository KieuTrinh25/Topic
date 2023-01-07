<?php
namespace App\Services\Klass\Actions;

use App\Services\Action;
use App\Services\Klass\Tasks\DeleteKlassTask;

class DeleteKlassAction extends Action{
    public function __construct()
    {
        
    }
    public function delete($id){
        return resolve(DeleteKlassTask::class)->delete($id);
    }

}