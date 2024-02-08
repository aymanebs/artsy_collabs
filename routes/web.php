<?php

use App\Http\Controllers\Art_projectController;
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






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
