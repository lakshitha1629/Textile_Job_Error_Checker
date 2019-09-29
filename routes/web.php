<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    $data=App\textilestatus::all();
    
    return view('index')->with('jobs',$data);
    //return view('index');
});

Route::get('/table', function () {
    return view('tables');
});

Route::get('/chart', function () {
    return view('Charts');
});

Route::post('/savejob','JobController@add');


Route::get('/JobUpdate/{id}','JobController@Update_End_Time');