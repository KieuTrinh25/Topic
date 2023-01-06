<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SchoolYear;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    public function index(){
        $yearSchoolList = SchoolYear::all();
        return $yearSchoolList;
    }
    public function show($id){
        $yearSchool = SchoolYear::find($id);
        return $yearSchool;
    }
    public function destroy($id){
        return SchoolYear::destroy($id);
    }
    public function store(Request $request){
        SchoolYear::create($request->all());
    }
    public function update($id, Request $request){  
        $yearSchool = SchoolYear::find($id); 
        $yearSchool->update($request->all());
    }
    
}
