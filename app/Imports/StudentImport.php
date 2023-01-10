<?php

namespace App\Imports;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    private $faculty_id;
    private $klass_id;

    public function __construct($faculty_id, $klass_id)
    {   
        $this->faculty_id = $faculty_id;
        $this->klass_id = $klass_id;
    }

    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {

        return new Student([
            'code' => $row[0],
            'name' => $row[1],
            'day_of_birth' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[2]),
            'sex' => $row[3],
            'phone' => $row[4],
            'email' => $row[5],
            'address' => $row[6],
            'faculty_id' => $this->faculty_id,
            'klass_id' => $this->klass_id,
        ]);
    }

    public function startRow()
    {
        return 2; //config('excel.import.start_row');
    }

}
