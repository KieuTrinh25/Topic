<?php
namespace App\Services\Semester\Actions;

use App\Services\Action;
use App\Services\Semester\Tasks\ShowSemesterTask;

class ShowSemesterAction extends Action
{
    public function __construct()
    {
    }

    public function run()
    {
        return resolve(ShowSemesterTask::class)->run();
    }
    public function find($id)
    {
        return resolve(ShowSemesterTask::class)->find($id);
    }

    public function getSemesterBySlug($slug)
    {
        return resolve(ShowSemesterTask::class)->getSemesterBySlug($slug);
    }


}
