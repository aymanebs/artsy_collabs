<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Art_projectController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Models\Art_project;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    

    

  
   
    // admin route goup

    Route::group(['middleware' => 'CheckRole:admin'], function () {

        // Art_project

        Route::get('/projects/archive', [Art_projectController::class,'archive'])->name('projects.archive');
        Route::get('/projects/restore/{project}',[Art_projectController::class, 'restore'])->name('projects.restore');
        Route::resource('projects', Art_projectController::class)->middleware('CheckRole:admin');
        

        // Artists
        
        Route::resource('artists', ArtistController::class);


        // Partners

        Route::resource('partners', PartnerController::class);

        //applications

        Route::get('/applications',[ApplicationController::class,'index'])->name('applications.index');

    });


     // artist route goup

    Route::group(['middleware' => 'CheckRole:artist'], function () {

    Route::get('/artists/apply/{project}',[ArtistController::class,'apply'])->name('artists.apply');

    });

    //home

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});



Route::get('/details',[Art_projectController::class,'show']);

require __DIR__ . '/auth.php';
