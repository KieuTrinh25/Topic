<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolYear;
use App\Services\Semester\Actions\CreateSemesterAction;
use App\Services\Semester\Actions\DeleteSemesterAction;
use App\Services\Semester\Actions\ShowSemesterAction;
use App\Services\Semester\Actions\UpdateSemesterAction;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index()
    {
        $semesterList = resolve(ShowSemesterAction::class)->run();
        $schoolYearList = SchoolYear::All();
        return view('admin.semesters.index', array(
            'semesterList' => $semesterList,
            'schoolYearList' => $schoolYearList,
        ));
    }
    public function create()
    {
        $schoolYearList = SchoolYear::All();
        return view('admin.semesters.index', array('schoolYearList' => $schoolYearList));
    }

    public function store(Request $request)
    {
        $product = resolve(CreateSemesterAction::class)->create(
            $request->all()
        );
        $request->session()->flash('status', 'them thanh cong');
        return redirect()->route('admin.semesters.index');
    }
    public function edit($id)
    {
        $semester = resolve(ShowSemesterAction::class)->find($id);
        $schoolYearList = SchoolYear::All();
        return view('admin.semesters.edit', array('Semester' => $semester, 'schoolYearList' => $schoolYearList), compact('semester'));
    }

    public function update($id, Request $request)
    {
        $semester = resolve(UpdateSemesterAction::class)->update($id, $request->all());
        if ($semester) {
            $request->session()->flash('status', 'Update Success');
        } else {
            $request->session()->flash('status', 'Update Fail');
        }
        return redirect()->route('admin.semesters.index');
    }


    public function destroy($id, Request $request)
    {


        $semester = resolve(DeleteSemesterAction::class)->delete($id);
        if ($semester) {
            $request->session()->flash('status', 'Delete Success');
        } else {
            $request->session()->flash('status', 'Delete Fail');
        }
        return redirect()->route('admin.semesters.index');
    }
}
