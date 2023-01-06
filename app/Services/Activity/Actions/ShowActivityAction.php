<?php
namespace App\Services\Activity\Actions;

use App\Services\Action;
use App\Services\Activity\Tasks\ShowActivityTask;

class ShowActivityAction extends Action
{
    public function __construct()
    {
    }

    public function run()
    {
        return resolve(ShowActivityTask::class)->run();
    }
    public function find($id)
    {
        return resolve(ShowActivityTask::class)->find($id);
    }

    public function getActivityBySlug($slug)
    {
        return resolve(ShowActivityTask::class)->getActivityBySlug($slug);
    }


}
