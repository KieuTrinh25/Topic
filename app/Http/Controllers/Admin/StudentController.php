<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {       
        return view('admin.student.index');
    }
    public function create()
    {
        return view('admin.student.create');
    }


    public function edit()
    {
        return view('admin.student.edit');
      
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
