<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Contacto;


Route::get('/', function () {
    return redirect('/dashboard');
      
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard',[
        'contacto' => App\Models\Contacto::all()
    ]);
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/about', fn () => Inertia::render('About'))->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('contactos', App\Http\Controllers\ContactoController::class);
});

require __DIR__.'/auth.php';
