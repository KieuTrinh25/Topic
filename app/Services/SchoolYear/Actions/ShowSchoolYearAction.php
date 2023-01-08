<?php
namespace App\Services\SchoolYear\Actions;

use App\Services\Action;
use App\Services\SchoolYear\Tasks\ShowSchoolYearTask;

class ShowSchoolYearAction extends Action
{
    public function __construct()
    {
    }

    public function run()
    {
        return resolve(ShowSchoolYearTask::class)->run();
    }
    public function find($id)
    {
        return resolve(ShowSchoolYearTask::class)->find($id);
    }

    public function getSchoolYearBySlug($slug)
    {
        return resolve(ShowSchoolYearTask::class)->getSchoolYearBySlug($slug);
    }


}
