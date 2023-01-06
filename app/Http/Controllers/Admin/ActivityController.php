<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {       
        return view('admin.activities.index');
    }
    public function create()
    {
        return view('admin.activities.create');
    }


    public function edit()
    {
        return view('admin.activities.edit');
      
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
