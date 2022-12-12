<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\User\DashboardController;

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

Route::view('/', 'index')->name('home');

Route::middleware(['guest'])->group(function(){
    
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});


Route::middleware(['auth'])->group(function(){
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/clients', [ClientController::class, 'index'])->name('clients');
    Route::get('/add-client', [ClientController::class, 'create'])->name('add-client');
    Route::post('/add-client', [ClientController::class, 'store']);
    Route::get('/client/{client}', [ClientController::class, 'show']);
    
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/add-project', [ProjectController::class, 'create'])->name('add-project');
    Route::post('/add-project', [ProjectController::class, 'store']);
    Route::get('/project/{project}', [ProjectController::class, 'show']);
    
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
    Route::get('/add-task', [TaskController::class, 'create'])->name('add-task');
    Route::post('/add-task', [TaskController::class, 'store']);
    Route::get('/task/{task}', [TaskController::class, 'show']);
    
    Route::get('/resources', [ResourceController::class, 'index'])->name('resources');
    Route::get('/add-resource', [ResourceController::class, 'create'])->name('add-resource');
    Route::post('/add-resource', [ResourceController::class, 'store']);
    Route::get('/resource/{resource}', [ResourceController::class, 'show']);

    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
});