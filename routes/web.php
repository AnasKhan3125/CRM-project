<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AdduserController;
use App\Http\Controllers\Frontend\ManageController;
use App\Http\Controllers\Frontend\AddprojectController;
use App\Http\Controllers\Frontend\ManageprojectController;
use App\Http\Controllers\Frontend\AddclientController;
use App\Http\Controllers\Frontend\ManageclientController;
use App\Http\Controllers\Frontend\userhomeController;
use App\Http\Controllers\Frontend\addtaskController;
use App\Http\Controllers\Frontend\viewtaskController;



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [AdduserController::class, 'index']);
Route::get('/manageuser', [ManageController::class, 'index']);
Route::get('/project', [AddprojectController::class, 'index']);
Route::get('/manageproject', [ManageprojectController::class, 'index']);
Route::get('/client', [AddclientController::class, 'index']);
Route::get('/manageclient', [ManageclientController::class, 'index']);
Route::get('/userhome', [userhomeController::class, 'index']);
Route::get('/addtask', [addtaskController::class, 'index']);
Route::get('/viewtask', [viewtaskController::class, 'index']);
