<?php
namespace App\Services\Faculty\Tasks;

use App\Http\Repositories\Faculty\FacultyRepository;
use App\Services\Task;

class ShowFacultyTask extends Task{
    private $repository;

    public function __construct(FacultyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(){
        return $this->repository->list();
    }

    public function find($id){
        return $this->repository->find($id);
    }
}