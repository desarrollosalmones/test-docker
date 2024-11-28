<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docker', function () {
    $usuarios = User::all();
    return view('welcome-docker')->with(compact('usuarios'));
});