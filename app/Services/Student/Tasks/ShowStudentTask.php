<?php
namespace App\Services\Student\Tasks;

use App\Http\Repositories\Student\StudentRepository;
use App\Services\Task;

class ShowStudentTask extends Task
{
    public $repository;

    public function __construct(StudentRepository $repository)
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
    // public function getStudentByName($name){
    //     return $this->repository->findByField("name", "like", "%$name");
    // }
}
