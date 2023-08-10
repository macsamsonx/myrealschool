<?php

use App\Http\Controllers\ProfileController;
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
})->name('home');
Route::get('/pricing', function () {
    return view('welcome');
})->name('pricing');
Route::get('/why-us', function () {
    return view('welcome');
})->name('why-us');
Route::get('/carrer-hub', function () {
    return view('welcome');
})->name('carrer-hub');
Route::get('/FAQs', function () {
    return view('faqs');
})->name('FAQs');
Route::get('/contact-us', function () {
    return view('contactUs');
})->name('contact-us');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
