<?php
namespace App\Services\Activity\Tasks;

use App\Http\Repositories\Activity\ActivityRepository;
use App\Services\Task;

class DeleteActivityTask extends Task{

    private $repository;

    public function __construct(ActivityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id){
        return $this->repository->delete($id);
    }

}