<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SchoolYear;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index(){
        $yearSchoolList = Semester::all();
        return $yearSchoolList;
    }
    public function show($id){
        $yearSchool = Semester::find($id);
        return $yearSchool;
    }
    public function destroy($id){
        return Semester::destroy($id);
    }
    public function store(Request $request){
        Semester::create($request->all());
    }
    public function update($id, Request $request){  
        $yearSchool = Semester::find($id); 
        $yearSchool->update($request->all());
    }
    
}