<?php
namespace App\Http\Repositories\Student;

use App\Http\Repositories\BaseRepository;
use App\Models\Student;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface
{

    public function getModel()
    {
        return Student::class;
    }

    function list() {
        return $this->getAll();
    } 

}
