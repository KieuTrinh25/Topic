<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Klass;
use Illuminate\Http\Request;

class KlassController extends Controller
{
    public function index(){
        $klassList = Klass::all();
        return $klassList;
    }
    public function show($id){
        $klass = Klass::find($id);
        return $klass;
    }
    public function store(Request $request){
        Klass::create($request->all());
    }
    public function update($id, Request $request){
        $klass = Klass::find($id);
        $klass->update($request->all());
    }
    public function destroy($id){
        return Klass::destroy($id);
    }
}
