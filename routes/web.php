<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User; // Import the User model

Route::get('/users', function () {
    $users = User::all(); // Retrieve all records from the users table
    return $users;
});
Route::get('/', function () {
    return view('welcome');
});


