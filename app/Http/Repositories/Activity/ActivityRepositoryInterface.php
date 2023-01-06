<?php

namespace App\Http\Repositories\Activity;

interface ActivityRepositoryInterface{
    public function list();
    public function getActivityBySlug($slug);

}
