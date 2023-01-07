<?php
namespace App\Services\Student\Tasks;

use App\Http\Repositories\Student\StudentRepository;
use App\Services\Task;

class DeleteStudentTask extends Task
{
    public $repository;
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }
    public function delete($id){
        return $this->repository->delete($id);    
    }
}
?>