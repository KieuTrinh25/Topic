<?php

namespace App\Http\Repositories\SchoolYear;

use App\Http\Repositories\BaseRepository;
use App\Models\SchoolYear;

class SchoolYearRepository extends BaseRepository implements SchoolYearRepositoryInterface
{
    public function getModel()
    {
        return SchoolYear::class;
    }

    public function list()
    {
        return $this->getAll();
    }

    public function getSchoolYearBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
