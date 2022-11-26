<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegistrationController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'HomePage']);

Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/callGitHub', [LoginRegistrationController::class, 'callGitHub']);

Route::get('/GitHubCallBack', [LoginRegistrationController::class, 'GitHubCallBack']);
Route::get('/dashboard', [DashBoardController::class, 'dashBoardPage'])->middleware('check');
Route::get('/Logout', [LoginRegistrationController::class, 'Logout']);


