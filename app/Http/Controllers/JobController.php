<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\textilestatus;

class JobController extends Controller
{
    public function add(Request $request)
    {
       //dd($request->all());
      $job = new textilestatus;

     $job->Line=$request->Line;
     $job->ErrorCode=$request->Code;
     $job->StartTime=$request->stime;
     $job->save();

     $data=textilestatus::all();

    // dd($data);
  //  return redirect()->back();
    return view('index')->with('jobs',$data);
    } 
}
