<?php

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

// Art_project

    Route::get('/projects',[Art_projectController::class,'index'])->name('projects.index');
    Route::get('projects/create',[Art_projectController::class,'create']);
    Route::post('projects/create',[Art_projectController::class,'store']);
    Route::put('projects/{project}/update',[Art_projectController::class,'update']);
    Route::delete('projects/{project}/delete',[Art_projectController::class,'destroy']);


// Artists

    Route::get('/artists',[ArtistController::class,'index'])->name('artists.index');
    Route::get('artists/create',[ArtistController::class,'create']);
    Route::post('artists/create',[ArtistController::class,'store']);
    Route::patch('artists/{artist}/update',[ArtistController::class,'update']);
    Route::delete('artists/{artist}/delete',[ArtistController::class,'destroy']);


// Partners

    Route::get('/partners',[PartnerController::class,'index'])->name('partners.index');
    Route::get('partners/create',[PartnerController::class,'create']);
    Route::post('partners/create',[PartnerController::class,'store']);
    Route::put('partners/{partner}/update',[PartnerController::class,'update']);
    Route::delete('partners/{partner}/delete',[PartnerController::class,'destroy']);

//home

    Route::get('/home',[HomeController::class,'index']);









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
