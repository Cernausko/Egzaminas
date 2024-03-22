<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkerController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout','\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');
});

// serviso routai
Route::get('/',[ServiceController::class,'index']);
Route::get('/add-service',[ServiceController::class,'addService']);
Route::post('/store/service',[ServiceController::class,'storeService']);
Route::get('/service/{id}', [ServiceController::class, 'show']);
Route::get('/service/delete/{service}',[ServiceController::class,'destroy']);
Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');


// darbuotojo routai

Route::get('/add-worker',[WorkerController::class,'addWorker']);
Route::post('/storeWorker',[WorkerController::class,'store']);
Route::get('/all-workers',[WorkerController::class,'index']);
Route::get('/worker/{id}',[WorkerController::class,'show']);
Route::get('/worker/delete/{worker}',[WorkerController::class,'destroy']);
Route::get('/worker/{id}/edit', [WorkerController::class, 'edit'])->name('worker.edit');
Route::put('/worker/{id}', [WorkerController::class, 'update'])->name('worker.update');



Route::post('/like/{id}',[LikesController::class,'store']);




require __DIR__.'/auth.php';
