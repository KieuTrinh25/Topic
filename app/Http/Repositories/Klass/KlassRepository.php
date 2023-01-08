<?php

namespace App\Http\Repositories\Klass;

use App\Http\Repositories\BaseRepository;
use App\Models\Klass;

class KlassRepository extends BaseRepository implements KlassRepositoryInterface
{
    public function getModel()
    {
        return Klass::class;
    }

    public function list()
    {
        return $this->getAll();
    }

    public function getKlassBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
