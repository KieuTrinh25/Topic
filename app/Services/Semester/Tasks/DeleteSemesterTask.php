<?php
namespace App\Services\Semester\Tasks;

use App\Http\Repositories\Semester\SemesterRepository;
use App\Services\Task;

class DeleteSemesterTask extends Task{

    private $repository;

    public function __construct(SemesterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id){
        return $this->repository->delete($id);
    }

}