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
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    
    Route::controller(ClientController::class)->group(function() {

        Route::get('/clients', 'index')->name('clients');
        Route::get('/clients/create', 'create');
        Route::post('/clients', 'store');
        Route::get('/client/edit/{client}', 'edit');
        Route::put('/client/{client}', 'update');
        Route::delete('/client/{client}', 'destroy');
        Route::get('/client/{client}', 'show');
    });

    Route::controller(ProjectController::class)->group(function() {

        Route::get('/projects', 'index')->name('projects');
        Route::get('/projects/create', 'create');
        Route::post('/projects', 'store');
        Route::get('/project/edit/{project}', 'edit');
        Route::put('/project/{project}', 'update');
        Route::delete('/project/{project}', 'destroy');
        Route::get('/project/{project}', 'show');
    });
    
    Route::controller(TaskController::class)->group(function() {

        Route::get('/tasks', 'index')->name('tasks');
        Route::get('/tasks/create', 'create');
        Route::post('/tasks', 'store');
        Route::get('/task/edit/{task}', 'edit');
        Route::get('/task/{task}', 'update');
        Route::delete('/task/{task}', 'destroy');
        Route::get('/task/{task}', 'show');
    });

    Route::controller(ResourceController::class)->group(function() {

        Route::get('/resources','index')->name('resources');
        Route::get('/resources/create', 'create');
        Route::post('/resources', 'store');
        Route::get('/resource/edit/{resource}', 'edit');
        Route::get('/resource/{resource}', 'update');
        Route::delete('/resource/{resource}', 'destroy');
        Route::get('/resource/{resource}', 'show');
    });
    
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
});