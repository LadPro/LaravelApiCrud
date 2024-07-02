<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/all', function ($id) {
    
});

// Route::resource('/note', NoteController::class);