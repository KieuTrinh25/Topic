<?php
namespace App\Services\SchoolYear\Tasks;

use App\Http\Repositories\SchoolYear\SchoolYearRepository;
use App\Services\Task;

class UpdateSchoolYearTask extends Task{

    private $repository;

    public function __construct(SchoolYearRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update($id,array $attributes){
        return $this->repository->update($id,$attributes);
    }
 

}