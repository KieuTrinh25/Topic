<?php

namespace App\Http\Repositories\SchoolYear;

interface SchoolYearRepositoryInterface{
    public function list();
    public function getSchoolYearBySlug($slug);

}
