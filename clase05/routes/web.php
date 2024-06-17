<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta con parametro o parametos dinamicos
//Route::get('note/{id?}', [NoteController::class, 'index'])->name('note.index');
/* Route::get('/', [NoteController::class, 'index'])->name('note.index');
Route::get('create', [NoteController::class, 'create'])->name('note.create');
Route::post('store', [NoteController::class, 'store'])->name('note.store');
Route::get('edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('update/{note}', [NoteController::class, 'update'])->name(('note.update'));
Route::get('show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('delete/{note}', [NoteController::class, 'destroy'])->name('note.destroy'); */

Route::resource('/note', NoteController::class);
Route::resource('/post', PostController::class);
