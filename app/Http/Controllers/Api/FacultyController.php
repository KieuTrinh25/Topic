<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        $facultyList = Faculty::all();
        return $facultyList;
    }
    public function show($id){
        $faculty = Faculty::find($id);
        return $faculty;
    }
    public function store(Request $request){
        Faculty::create($request->all());
    }
    public function update($id, Request $request){
        $faculty = Faculty::find($id);
        $faculty->update($request->all());
    }
    public function destroy($id){
        return Faculty::destroy($id);
    }
}
