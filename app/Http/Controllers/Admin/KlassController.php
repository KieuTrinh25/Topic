<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Klass;
use App\Services\Klass\Actions\CreateKlassAction;
use App\Services\Klass\Actions\DeleteKlassAction;
use App\Services\Klass\Actions\ShowKlassAction;
use App\Services\Klass\Actions\UpdateKlassAction;
use Illuminate\Http\Request;

class KlassController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:klass-list|klass-create|klass-edit|klass-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:klass-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:klass-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:klass-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $KlassList = resolve(ShowKlassAction::class)->run();
        $facultyList = Faculty ::All();
        return view('admin.klasses.index', array(
            'KlassList' => $KlassList,
            'facultyList' => $facultyList,
        ));
    }
    public function create()
    {
        $klass = new Klass();
        $randomeCode = randomCodeNumber();
        $klass->code = $klass->input($randomeCode);
        $klass-> Klass()->save($klass);
        $facultyList = Faculty::All();
        return view('admin.klasses.index', array('$facultyList' => $facultyList,
        ));
    }

    public function store(Request $request)
    {

        $klass = resolve(CreateKlassAction::class)->create($request->all());
        if ($klass) {
            $request->session()->flash('status', 'Create Klass Success');
        } else {
            $request->session()->flash('status', 'Create Klass Fail');
        }
        return redirect()->route('admin.klasses.store');
    }

    public function edit($id)
    {
        $klass = resolve(ShowKlassAction::class)->find($id);
        $facultyList = Faculty::All();      
        return view('admin.klasses.edit', array(
        'klass' => $klass,
        'facultyList' => $facultyList,));
    }

    public function update($id, Request $request)
    {
        $klass = resolve(UpdateKlassAction::class)->update($id, $request->all());
        if ($klass) {
            $request->session()->flash('status', 'Update Success');
        } else {
            $request->session()->flash('status', 'Update Fail');
        }
        return redirect()->route('admin.klasses.index');
    }


    public function destroy($id, Request $request)
    {


        $klass = resolve(DeleteKlassAction::class)->delete($id);
        if ($klass) {
            $request->session()->flash('status', 'Delete Success');
        } else {
            $request->session()->flash('status', 'Delete Fail');
        }
        return redirect()->route('admin.klasses.index');
    }
}
