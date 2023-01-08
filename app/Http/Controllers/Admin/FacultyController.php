<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {       
        return view('admin.faculties.index');
    }
    public function create()
    {
        return view('admin.faculty.create');
    }


    public function edit()
    {
        return view('admin.faculty.edit');
      
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
