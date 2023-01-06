<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $activityList = Activity::All();
        return $activityList;
    }
    public function show($id){
        $activity = Activity::Find($id);
        return $activity;
    }
    public function update($id, Request $request){
        $activity = Activity::Find($id);
        $activity->update($request->all());
        return $activity;
    }
    public function destroy($id){
        Activity::destroy($id);
    }

    public function store(Request $request){
        Activity::create(
            $request->all()
        );
    }

}
