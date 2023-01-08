<?php
namespace App\Services\Faculty\Tasks;

use App\Http\Repositories\Faculty\FacultyRepository;
use App\Services\Task;

class UpdateFacultyTask extends Task{

    private $repository;

    public function __construct(FacultyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update($id,array $attributes){
        return $this->repository->update($id,$attributes);
    }   
}