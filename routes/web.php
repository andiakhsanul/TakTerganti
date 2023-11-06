<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return View('pages.auth.login', [
        'title' => 'Login'
    ]);
})->name('login.User');

Route::get('/register', function () {
    return View('pages.auth.register', [
        'title' => 'Register'
    ]);
})->name('Register.User');

Route::get('/navbar',function(){
    return view('partials.users.header');
});
