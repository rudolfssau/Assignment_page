<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Route::get('users', [UserController::class, 'users']);
Route::get('users', function ()
{
    return View::make('welcome');
});
