<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('all.dashboard');
});
Route::get('/quiz', function () {
    return view('all.quiz');
});
Route::get('/teachers', function () {
    return view('all.teachers');
});