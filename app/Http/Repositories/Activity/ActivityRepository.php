<?php

namespace App\Http\Repositories\Activity;

use App\Http\Repositories\BaseRepository;
use App\Models\Activity;

class ActivityRepository extends BaseRepository implements ActivityRepositoryInterface
{
    public function getModel()
    {
        return Activity::class;
    }

    public function list()
    {
        return $this->getAll();
    }

    public function getActivityBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
