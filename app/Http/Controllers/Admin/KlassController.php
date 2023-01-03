<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KlassController extends Controller
{
    public function index()
    {       
        return view('admin.klass.index');
    }
    public function create()
    {
        return view('admin.klass.create');
    }


    public function edit()
    {

      
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
