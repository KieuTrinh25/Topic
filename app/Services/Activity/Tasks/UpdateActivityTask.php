<?php
namespace App\Services\Activity\Tasks;

use App\Http\Repositories\Activity\ActivityRepository;
use App\Services\Task;

class UpdateActivityTask extends Task{

    private $repository;

    public function __construct(ActivityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update($id,array $attributes){
        return $this->repository->update($id,$attributes);
    }
 

}