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
/*
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
*/

//Single Artist View
Route::get('/artists/{artist}', [SongController::class, 'show'])->name('artists.show');
//Artist List View
Route::get('/artists', [SongController::class, 'index'])->name('artists.index');
//Single Album View
Route::get('/albums/{album}', [SongController::class, 'show'])->name('albums.show');
//Album List View
Route::get('/albums', [SongController::class, 'index'])->name('albums.index');
//Single Song View
Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');
//Song List View
Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
