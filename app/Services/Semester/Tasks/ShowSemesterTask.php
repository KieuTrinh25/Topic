<?php
namespace App\Services\Semester\Tasks;

use App\Http\Repositories\Semester\SemesterRepository;
use App\Services\Task;

class ShowSemesterTask extends Task
{
    private $repository;

    public function __construct(SemesterRepository $repository)
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
    public function getSemesterBySlug($slug)
    {
        return $this->repository->getSemesterBySlug($slug);
    }
}
