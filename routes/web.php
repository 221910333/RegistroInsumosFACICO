<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ExcelController;


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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//////////////////////////Administration
Route::get('home', [AdminController::class, 'registros'])->name('registros');
Route::get('/',[SystemController::class, 'prestamo'])->name('prestamo');
Route::get('numeros2a', [SystemController::class, 'numeros2a'])->name('numeros2a');
Route::post('save', [SystemController::class, 'save'])->name('save');

Route::get('exportarA', [ExcelController::class, 'exportA'])->name('exportarA');
Route::get('exportarB', [ExcelController::class, 'exportB'])->name('exportarB');
?>