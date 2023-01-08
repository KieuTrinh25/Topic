<?php
namespace App\Services\Student\Tasks;

use App\Http\Repositories\Student\StudentRepository;
use App\Services\Task;

class UpdateStudentTask extends Task
{
    public $repository;
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }
    public function update($id, array $attributes){
        return $this->repository->update($id, $attributes);    
    }
}
?>