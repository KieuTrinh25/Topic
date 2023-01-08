<?php
namespace App\Services\Semester\Tasks;

use App\Http\Repositories\Semester\SemesterRepository;
use App\Services\Task;

class UpdateSemesterTask extends Task{

    private $repository;

    public function __construct(SemesterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update($id,array $attributes){
        return $this->repository->update($id,$attributes);
    }
 

}