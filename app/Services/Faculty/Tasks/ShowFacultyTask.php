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

    public function getSingleFaculty($id){
        return $this->repository->find($id);
    }

    public function getFacultyBySlug($slug){
        return  $this->repository->getFacultyBySlug($slug);
    }

    public function getFacultyByName($name){
        return  $this->repository->findByField("name", "like", "%$name%");
    }
}