<?php

namespace App\Http\Repositories\Semester;

interface SemesterRepositoryInterface{
    public function list();
    public function getSemesterBySlug($slug);

}
