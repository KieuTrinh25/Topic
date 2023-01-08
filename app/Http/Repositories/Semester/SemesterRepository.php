<?php

namespace App\Http\Repositories\Semester;

use App\Http\Repositories\BaseRepository;
use App\Models\Semester;

class SemesterRepository extends BaseRepository implements SemesterRepositoryInterface
{
    public function getModel()
    {
        return Semester::class;
    }

    public function list()
    {
        return $this->getAll();
    }

    public function getSemesterBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
