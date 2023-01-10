<?php
namespace App\Http\Repositories\Faculty;

interface FacultyRepositoryInterface{
    public function list();
    public function getFacultyBySlug($slug);
}