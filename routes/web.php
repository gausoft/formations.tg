<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('contact-2', [HomeController::class, 'contactSecond'])->name('contact-2');
Route::get('/browse', [HomeController::class, 'browse']);
Route::get('/publish', [HomeController::class, 'publish']);
Route::get('/directory', [HomeController::class, 'directory']);
Route::get('/categories/{slug}/trainings', [HomeController::class, 'trainingsByCategory'])->name('category.trainings');
Route::get('/trainings/{slug}', [HomeController::class, 'trainingsDetails'])->name('trainings.show');


Route::get('/trainers', function () {
    return view('pages/trainers');
});

Route::get('/trainers/{slug}', function () {
    return view('pages/trainer-page');
});

Route::get('/training-centers', function () {
    return view('pages/training-centers');
});

Route::get('/modals', function () {
    return view('modals');
});