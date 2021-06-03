<?php

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

//Route::get('/theater',function (){
//    return view('user.theater_seat_book');
//});

Route::get('admin/home', function () {
    return view('admin.home');
})->name('post');

Route::get('/',[App\Http\Controllers\HomePageController::class,'index'])->name('homepage');
Route::resource('movie_show',App\Http\Controllers\MovieHomeController::class);
Route::get('/movie/{id}',[App\Http\Controllers\MovieController::class,'show']);
Route::get('/actor/{id}',[App\Http\Controllers\ActorController::class,'show']);
Route::resource('actor_show',App\Http\Controllers\ActorHomeController::class);
Route::post('/search',[App\Http\Controllers\MovieController::class,'search'])->name('search');
Route::get('/book/{id}',[App\Http\Controllers\MovieBookController::class,'index']);
Route::post('/reserve',[App\Http\Controllers\MovieBookController::class,'reserve'])->name('ticket-save');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/actor-details',[App\Http\Controllers\ActorController::class,'index'])->name('actor-details');
Route::post('/actor-save',[App\Http\Controllers\ActorController::class,'store'])->name('actor-save');
Route::get('/actor-create',[App\Http\Controllers\ActorController::class,'create'])->name('actor-create');
Route::get('/movies-details',[App\Http\Controllers\MovieController::class,'index'])->name('movies-details');
Route::post('/movies-save',[App\Http\Controllers\MovieController::class,'store'])->name('movies-save');
Route::get('/movies-create',[App\Http\Controllers\MovieController::class,'create'])->name('movies-create');
Route::post('/cast-save',[App\Http\Controllers\MovieController::class,'cast'])->name('cast-save');
Route::get('/cast-create',[App\Http\Controllers\MovieController::class,'createcast'])->name('cast-create');
Route::get('/theatres-details',[App\Http\Controllers\TheaterController::class,'index'])->name('theatres-details');
Route::post('/theatres-save',[App\Http\Controllers\TheaterController::class,'store'])->name('theatres-save');
Route::get('/theatres-create',[App\Http\Controllers\TheaterController::class,'create'])->name('theatres-create');
Route::get('/city-create',[App\Http\Controllers\TheaterController::class,'createcity'])->name('city-create');
Route::post('/city-save',[App\Http\Controllers\TheaterController::class,'city'])->name('city-save');
Route::get('seat-add',[App\Http\Controllers\TheaterController::class,'createseat'])->name('seat-add');
Route::post('/seat-save',[App\Http\Controllers\TheaterController::class,'seat'])->name('seat-save');
Route::get('/screen-create',[App\Http\Controllers\ScreeningController::class,'create'])->name('screen-create');
Route::get('/screening-details', [App\Http\Controllers\ScreeningController::class, 'index'])->name('screening-details');
Route::post('/screening-save', [App\Http\Controllers\ScreeningController::class, 'store'])->name('screening-save');
