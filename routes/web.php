<?php

use Illuminate\Support\Facades\Route;

Route::get('/homeartisan migrate:fresh', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/testedeconteudo', 'teste');

Route::view('/criar-conta', 'Criar-Conta');