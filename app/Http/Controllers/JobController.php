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
     return redirect()->back();
    } 
}
