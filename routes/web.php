<?php

use Illuminate\Support\Facades\Route;
use App\Models\Experiences;
use App\Models\Projects;
use App\Http\Controllers\Experience;
use App\Http\Controllers\Project;
use App\Http\Controllers\Auth;
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

Route::get('/', function () {
    $data = Projects::take(4)->get();
    $data2 = Experiences::take(4)->get();
    return view('landing')->with(['projects' => $data, 'experiences' => $data2]);
});



Route::get('/login', [Auth::class, 'index']);
Route::post('/login', [Auth::class, 'login']);
Route::get('/logout', [Auth::class, 'logout']);

Route::get('/experience', function () {
    $data = Experiences::get();

    return view('experience')->with(['experiences' => $data]);
});
Route::post('/experience', [Experience::class, 'store']);
Route::patch('/experience/{experience}', [Experience::class, 'update']);
Route::delete('/experience/{experience}', [Experience::class, 'destroy']);

Route::get('/project', function () {
    $data = projects::get();

    return view('project')->with(['projects' => $data]);
});
Route::post('/project', [Project::class, 'store']);
Route::patch('/project/{project}', [Project::class, 'update']);
Route::delete('/project/{project}', [Project::class, 'destroy']);


// Route::resource('projects', project::class);




