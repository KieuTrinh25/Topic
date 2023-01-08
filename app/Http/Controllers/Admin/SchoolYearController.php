<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SchoolYear\Actions\CreateSchoolYearAction;
use App\Services\SchoolYear\Actions\DeleteSchoolYearAction;
use App\Services\SchoolYear\Actions\ShowSchoolYearAction;
use App\Services\SchoolYear\Actions\UpdateSchoolYearAction;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    public function index()
    {
        $schoolYearList = resolve(ShowSchoolYearAction::class)->run();
        return view('admin.schoolyears.index', array(
            'schoolYearList' => $schoolYearList,
        ));
    }
    public function create()
    {
        $schoolYearList = resolve(ShowSchoolYearAction::class)->run();
        return view('admin.schoolyears.create', array('schoolYearList' => $schoolYearList));
    }

    public function store(Request $request)
    {
        $product = resolve(CreateSchoolYearAction::class)->create(
            $request->all()
        );
        $request->session()->flash('status', 'them thanh cong');
        return redirect()->route('admin.schoolyears.index');
    }
    public function edit($id)
    {
        $schoolYear = resolve(ShowSchoolYearAction::class)->find($id);
        return view('admin.schoolyears.edit', array('schoolYear' => $schoolYear), compact('schoolYear'));
    }

    public function update($id, Request $request)
    {
        $schoolYear = resolve(UpdateSchoolYearAction::class)->update($id, $request->all());
        if ($schoolYear) {
            $request->session()->flash('status', 'Update Success');
        } else {
            $request->session()->flash('status', 'Update Fail');
        }
        return redirect()->route('admin.schoolyears.index');
    }


    public function destroy($id, Request $request)
    {


        $schoolYear = resolve(DeleteSchoolYearAction::class)->delete($id);
        if ($schoolYear) {
            $request->session()->flash('status', 'Delete Success');
        } else {
            $request->session()->flash('status', 'Delete Fail');
        }
        return redirect()->route('admin.schoolyears.index');
    }
}
