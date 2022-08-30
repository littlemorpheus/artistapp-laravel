<?php

use App\Http\Controllers\NumberController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

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

Route::get('/add/{x}/{y}', [NumberController::class, 'add'])->name('numbers.add');
Route::get('/add', [NumberController::class, 'add2'])->name('numbers.add2');

Route::get('/elliot', function () {
    // fetch models from the db
    // searching those models - filtering 
    // hit a third party api 
    return view('elliot');
});

// Define a route, that will be triggered on /nathan, and when triggered 
// returns a new view that says something using html
Route::get('/nathan', function () {
    return view('nathan');
});

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');

//Single Artist View
//Artist List View
//Single Album View
//Album List View
//Single Song View
//Song List View
