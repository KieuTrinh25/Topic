<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class StudentImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Student::create([
                'code' => $row[0],
                'name' => $row[1],
                'faculty' => $row[2],
                'klass' => $row[3],
            ]);
        }
    }
}
