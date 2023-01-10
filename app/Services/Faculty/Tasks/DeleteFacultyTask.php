<?php
namespace App\Services\Faculty\Task;

use App\Http\Repositories\Faculty\FacultyRepository;
use App\Services\Task;

class DeleteFacultyTask extends Task{
    private $repository;

    public function __construct(FacultyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id){
        return $this->repository->delete($id);
    }
}