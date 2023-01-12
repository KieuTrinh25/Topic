<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {      
        $activityList = Activity::all();
        $events = array();
        foreach($activityList as $activity){
            array_push($events, array(
                'title' => $activity->name,
                'start' => $activity->start_time,
                'end' => $activity->end_time,
            ));
        } 
        // if($request->ajax()) {
       
        //     $data = Activity::whereDate('start_time', '>=', $request->start_time)
        //               ->whereDate('end_time',   '<=', $request->end_time)
        //               ->get(['id', 'name', 'start_time', 'end_time']);
 
        //     return response()->json($data);}

        return view('admin.calendars.index', array(
            'events' => $events,

        ));
    }
    // public function ajax(Request $request)
    // {
 
    //     switch ($request->type) {
    //        case 'add':
    //           $event = Activity::create([
    //               'name' => $request->name,
    //               'start_time' => $request->start_time,
    //               'end_time' => $request->end_time,
    //           ]);
 
    //           return response()->json($event);
    //          break;
  
    //        case 'update':
    //           $event = Activity::find($request->id)->update([
    //               'name' => $request->name,
    //               'start_time' => $request->start_time,
    //               'end_time' => $request->end_time,
    //           ]);
 
    //           return response()->json($event);
    //          break;
  
    //        case 'delete':
    //           $event = Activity::find($request->id)->delete();
  
    //           return response()->json($event);
    //          break;
             
    //        default:
    //          # code...
    //          break;
    //     }
    // }
    public function create()
    {
        return view('admin.calendars.create');
    }


    public function edit()
    {
        return view('admin.calendars.edit');
      
    }

    public function update()
    {
       
    }

    public function destroy()
    {
        
    }
}
