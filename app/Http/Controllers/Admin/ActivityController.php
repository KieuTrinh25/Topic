<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolYear;
use App\Services\Activity\Actions\CreateActivityAction;
use App\Services\Activity\Actions\DeleteActivityAction;
use App\Services\Activity\Actions\ShowActivityAction;
use App\Services\Activity\Actions\UpdateActivityAction;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ActivityController extends Controller
{
    public function index()
    {
        $activityList = resolve(ShowActivityAction::class)->run();
        $schoolYearList = SchoolYear::All();
        return view('admin.activities.index', array(
            'activityList' => $activityList,
            'schoolYearList' => $schoolYearList,
        ));
    }
    public function create()
    {
        $schoolYearList = SchoolYear::All();
        return view('admin.activities.index', array('schoolYearList' => $schoolYearList));
    }

    public function store(Request $request)
    {
        $product = resolve(CreateActivityAction::class)->create(
            $request->all()
        );
        $request->session()->flash('status', 'them thanh cong');
        return redirect()->route('admin.activities.index');
    }
    public function edit($id)
    {
        $activity = resolve(ShowActivityAction::class)->find($id);
        $schoolYearList = SchoolYear::All();
        return view('admin.activities.edit', array('Activity' => $activity, 'schoolYearList' => $schoolYearList), compact('activity'));
    }

    public function update($id, Request $request)
    {
        $activity = resolve(UpdateActivityAction::class)->update($id, $request->all());
        if ($activity) {
            $request->session()->flash('status', 'Update Success');
        } else {
            $request->session()->flash('status', 'Update Fail');
        }
        return redirect()->route('admin.activities.index');
    }


    public function destroy($id, Request $request)
    {


        $activity = resolve(DeleteActivityAction::class)->delete($id);
        if ($activity) {
            $request->session()->flash('status', 'Delete Success');
        } else {
            $request->session()->flash('status', 'Delete Fail');
        }
        return redirect()->route('admin.activities.index');
    }
    public function qrCode($id, Request $request)
    {
        $qrCode = QrCode::size(500)-> generate($activity = resolve(ShowActivityAction::class)->find($id));
        return view('admin.activities.qrcode',compact('qrCode'));
    }
}
