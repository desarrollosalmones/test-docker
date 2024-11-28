<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docker', function () {
    $usuarios = User::all();
    return view('welcome-docker')->with(compact('usuarios'));
});

Route::get('/create-table-users', function(){
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });
});