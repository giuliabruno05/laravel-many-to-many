<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\TechnologyController;
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

Route :: get('/', [GuestController :: class, 'index'])
    -> name('project.index');
    
Route :: get('/show/{id}', [LoggedController :: class, 'show'])
    -> middleware(['auth'])
    -> name('project.show');

Route :: get('/create', [LoggedController :: class, 'create'])
-> middleware(['auth'])
-> name('project.create');

Route :: post('/store', [LoggedController :: class, 'store'])
-> middleware(['auth'])
-> name('project.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route :: get('/technologies/create',[TechnologyController::class,'create'])
-> name('technology.create');

Route :: post('/technologies/store',[TechnologyController::class,'store'])
-> name('technology.store');

Route :: get('/technologies/edit/{id}',[TechnologyController::class,'edit'])
-> name('technology.edit');

Route :: put('/technologies/update/{id}',[TechnologyController::class,'update'])
 -> name('technology.update');

Route :: get('/technologies/{id}',[TechnologyController::class,'show'])

-> name('technology.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
