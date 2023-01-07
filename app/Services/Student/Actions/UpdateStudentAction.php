<?php
namespace App\Services\Student\Actions;

use App\Services\Action;
use App\Services\Student\Tasks\UpdateStudentTask;

class UpdateStudentAction extends Action
{
    public function __construct()
    {

    }
    public function update($id, array $attributes)
    {
        return resolve(UpdateStudentTask::class)->update($id, $attributes);
    }
}
