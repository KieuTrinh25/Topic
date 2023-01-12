<?php
namespace App\Http\Repositories\Faculty;

use App\Http\Repositories\BaseRepository;
use App\Models\Faculty;

class FacultyRepository extends BaseRepository implements FacultyRepositoryInterface{
    public function getModel()
    {
        return Faculty::class;
    }

    public function list(){
        return $this->getAll();
    }
    
}