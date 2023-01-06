<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index()
    {       
        return view('admin.semesters.index');
    }
    public function create()
    {
        return view('admin.semesters.create');
    }


    public function edit()
    {

        return view('admin.semesters.edit');
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
