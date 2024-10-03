<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/sections/users', function () {
    return view('sections.users'); // Match the new view file path
})->name('sections.users'); // Naming the route

Route::get('/sections/reports', function () {
    return view('sections.reports'); // Match the new view file path
})->name('sections.reports'); // Naming the route

Route::get('/login', function () {
    return view('admin.login'); // Match the view file path
})->name('login');