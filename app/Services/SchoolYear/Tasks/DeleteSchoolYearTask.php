<?php
namespace App\Services\SchoolYear\Tasks;

use App\Http\Repositories\SchoolYear\SchoolYearRepository;
use App\Services\Task;

class DeleteSchoolYearTask extends Task{

    private $repository;

    public function __construct(SchoolYearRepository $repository)
    {
        $this->repository = $repository;
    }

    public function delete($id){
        return $this->repository->delete($id);
    }

}