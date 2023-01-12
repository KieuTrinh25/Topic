<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Faculty\Actions\CreateFacultyAction;
use App\Services\Faculty\Actions\DeleteFacultyAction;
use App\Services\Faculty\Actions\ShowFacultyAction;
use App\Services\Faculty\Actions\UpdateFacultyAction;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $facultyList = resolve(ShowFacultyAction::class)->run();
        return view('admin.faculties.index', array(
            'facultyList' => $facultyList,
        ));
    }

    public function create()
    {
        $facultyList = resolve(ShowFacultyAction::class)->run();
        return view('admin.faculties.create', array(
            'facultyList' => $facultyList,
        ));
    }

    public function store(Request $request)
    {
        $faculty = resolve(CreateFacultyAction::class)->create($request->all());
        if($faculty){
            $request->session()->flash('status', 'Create Faculty Success');
        } else {
            $request->session()->flash('status', 'Create Faculty Fail');
        }
        return redirect()->route('admin.faculties.index');
    }

    public function edit($id)
    {
        $faculty = resolve(ShowFacultyAction::class)->find($id);
        return view('admin.faculties.edit', array(
            'faculty' => $faculty,
        ));
    }

    public function update($id, Request $request)
    {
        $faculty = resolve(UpdateFacultyAction::class)->update($id, $request->all());
        if($faculty) {
            $request->session()->flash('status', 'Update Faculty Success');
        } else {
            $request->session()->flash('status', 'Update Faculty Fail');
        }
        return redirect()->route('admin.faculties.index');
    }

    public function destroy($id, Request $request)
    {
        $bool = resolve(DeleteFacultyAction::class)->delete($id);
        if ($bool) {
            $request->session()->flash('status', 'Delete Faculty Success');
        } else {
            $request->session()->flash('status', 'Delete Faculty Fail');
        }
        return redirect()->route('admin.faculties.index');
    }
}