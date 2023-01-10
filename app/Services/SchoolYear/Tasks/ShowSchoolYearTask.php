<?php
namespace App\Services\SchoolYear\Tasks;

use App\Http\Repositories\SchoolYear\SchoolYearRepository;
use App\Services\Task;

class ShowSchoolYearTask extends Task
{
    private $repository;

    public function __construct(SchoolYearRepository $repository)
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
    public function getSchoolYearBySlug($slug)
    {
        return $this->repository->getSchoolYearBySlug($slug);
    }
}
