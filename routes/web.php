<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/form', [FormController::class, 'show'])->name('form.show');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/form/thanks', function () {
    return view('thanks');})->name('form.thanks');
Route::get('form/list', [FormController::class, 'list'])->name('users.index');
Route::get('form/edit/{id}', [FormController::class, 'edit'])->name('users.edit');
Route::put('form/update/{id}', [FormController::class, 'update'])->name('users.update');
Route::delete('form/delete/{id}', [FormController::class, 'destroy'])->name('users.delete');


require __DIR__.'/auth.php';
