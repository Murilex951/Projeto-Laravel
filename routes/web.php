<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', function(){
    return view("welcome");
});

Route::get('/dashboard', function(){
    return view("dashboard");
})->name("dashboard")->middleware("auth");

Route::resource('livros', LivroController::class);
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');
Route::get('/livros/{livro}', [LivroController::class, 'show'])->name('livros.show');


Route::get('/editar/{livro}', [LivroController::class, 'edit'])->name('livros.edit');
Route::post('/editar/{livro}', [LivroController::class, 'update'])->name('livros.update');
Route::get('/deletar/{livro}', [LivroController::class, 'destroy'])->name('livros.destroy');

//Route::resource('livros', LivroController::class);
// Route::view('/{path}', 'livros');

require_once 'auth.php';