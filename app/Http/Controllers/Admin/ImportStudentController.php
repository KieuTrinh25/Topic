<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\StudentImport;
use App\Models\Faculty;
use App\Models\Klass;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportStudentController extends Controller
{     
    public function index(){
        $facultyList = Faculty::all();
        $klassList = Klass::all();
        return view('admin.students.index', array( 
            'facultyList' => $facultyList,
            'klassList' => $klassList,
        ));
    }
    public function importBlade(){
        
        return view('admin.students.index');
    }
    public function import(Request $request){
        try{
            
            Excel::import(new StudentImport($request->get('faculty_id'),$request->get('klass_id')), $request->file('file_student'));
            
        }catch(\Exception $ex){
            report($ex);
            // dd($ex);
        }
        return redirect()->route('admin.students.index');
        // Excel::import(new ImportStudentController, 'ds.xlsx');
        // return redirect('/')->with('success', 'All good!');
    }
}
