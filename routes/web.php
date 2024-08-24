<?php

use App\Http\Controllers\ReceptionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return redirect()->route('reception.index');
});




/*
  reception
*/
Route::get('/reception', function () {
    return view('pages.reception.index');
});

Route::get('/reception/create', function () {
    return view('pages.reception.create');
});

// // Auth::routes();
// Route::view('/register', 'auth.register');


Route::resource('reception', ReceptionController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
