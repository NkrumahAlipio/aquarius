<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TreinadorController;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\Definicoes;
use App\Http\Livewire\Pages\Especies;
use App\Http\Livewire\Pages\Shows;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::resource('/', DashboardController::class);
Route::resource('animais', AnimalController::class);
Route::resource('plantas', PlantaController::class);
Route::resource('shows', ShowController::class);
Route::resource('treinadores', TreinadorController::class);
Route::get('treinador/{id}/animais', [TreinadorController::class, 'animais']);
