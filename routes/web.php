<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*
|--------------------------------------------------------------------------
| Inertia -> React render this routes
|--------------------------------------------------------------------------
|   Check readMe.md for more!
*/

Route::get('/', function () {
    return Inertia::render('Test');
});

/*
|--------------------------------------------------------------------------
| Laravel -> Normal web routes
|--------------------------------------------------------------------------
|   All this routes are loaded normaly as Laravel does
|
*/
Route::get('/user', function() {
    return view('user');
});
