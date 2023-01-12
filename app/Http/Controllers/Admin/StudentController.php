<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Klass;
use App\Models\Student;
use App\Services\Student\Actions\CreateStudentAction;
use App\Services\Student\Actions\DeleteStudentAction;
use App\Services\Student\Actions\ShowStudentAction;
use App\Services\Student\Actions\UpdateStudentAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:student-list|student-create|student-edit|student-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:student-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:student-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:student-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $studentList = resolve(ShowStudentAction::class)->run();
        $facultyList = Faculty::all();
        $klassList = Klass::all();
        return view('admin.students.index', array(
            'studentList' => $studentList,
            'facultyList' => $facultyList,
            'klassList' => $klassList,
        ));
    }
    public function create()
    {
        $facultyList = Faculty::all();
        $klassList = Klass::all();
        return view('admin.students.create', array(
            'facultyList' => $facultyList,
            'klassList' => $klassList,
        ));
    }
    public function store(Request $request)
    {

        $student = resolve(CreateStudentAction::class)->create($request->all());
        if ($student) {
            $request->session()->flash('status', 'Create Student Success');
        } else {
            $request->session()->flash('status', 'Create Student Fail');
        }
        return redirect()->route('admin.students.index');
    }

    public function edit($id)
    {
        $student = resolve(ShowStudentAction::class)->find($id);
        $facultyList = Faculty::all();
        $klassList = Klass::all();
        return view('admin.students.edit', array(
            'student' => $student,
            'facultyList' => $facultyList,
            'klassList' => $klassList,
        ));
    }

    public function update($id, Request $request)
    {
        $student = resolve(UpdateStudentAction::class)->update($id, $request->all());
        if ($student) {
            $request->session()->flash('status', 'Update Student Success');
        } else {
            $request->session()->flash('status', 'Update Student Fail');
        }
        return redirect()->route('admin.students.index');
    }

    public function destroy($id, Request $request)
    {
        $bool = resolve(DeleteStudentAction::class)->delete($id);
        if ($bool) {
            $request->session()->flash('status', 'Delete Student Success');
        } else {
            $request->session()->flash('status', 'Delete Student Fail');
        }

        return redirect()->route('admin.students.index');
    }
    public function qrCode($id, Request $request)
    {
        $qrCode = QrCode::size(500)-> generate($student = resolve(ShowStudentAction::class)->find($id));
        return view('admin.students.qrcode',compact('qrCode'));
    }

    // public function search(Request $request)
    // {
    //     $studentName = $request->input("search");
    //     $studentList = resolve(ShowStudentAction::class)->getStudenByClass($studentName)->paginate(12);
    //     $facultyList = Faculty::all();
    //     $klassList = Klass::all();
    //     return view("student-search", array(
    //         'studentList' => $studentList,
    //         'facultyList' => $facultyList,
    //         'klassList' => $klassList,
    //     ));
    // }
}
