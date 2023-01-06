<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    public function index()
    {       
        return view('admin.schoolyears.index');
    }
    public function create()
    {
        return view('admin.schoolyears.create');
    }


    public function edit()
    {
        return view('admin.schoolyears.edit');
      
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
