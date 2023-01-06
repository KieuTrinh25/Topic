<?php
namespace App\Services\Activity\Tasks;

use App\Http\Repositories\Activity\ActivityRepository;
use App\Services\Task;

class ShowActivityTask extends Task
{
    private $repository;

    public function __construct(ActivityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->list();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
    public function getActivityBySlug($slug)
    {
        return $this->repository->getActivityBySlug($slug);
    }
}
