<?php
namespace App\Services\Student\Actions;

use App\Services\Action;
use App\Services\Student\Tasks\DeleteStudentTask;

class DeleteStudentAction extends Action
{

    public function __construct()
    {

    }
    public function delete($id)
    {
        return resolve(DeleteStudentTask::class)->delete($id);
    }
}
