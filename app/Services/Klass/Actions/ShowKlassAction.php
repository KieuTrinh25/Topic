<?php
namespace App\Services\Klass\Actions;

use App\Services\Action;
use App\Services\Klass\Tasks\ShowKlassTask;

class ShowKlassAction extends Action
{
    public function __construct()
    {
    }

    public function run()
    {
        return resolve(ShowKlassTask::class)->run();
    }
    public function find($id)
    {
        return resolve(ShowKlassTask::class)->find($id);
    }

    public function getKlassBySlug($slug)
    {
        return resolve(ShowKlassTask::class)->getKlassBySlug($slug);
    }


}
