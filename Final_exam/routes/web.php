<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[homeController::class,'index'])->name('home');

Route::get('/patient',[homeController::class,'patientForm'])->name('patientForm');

Route::get('/doctor',[homeController::class,'indexDoctor'])->name('indexDoctor');

Route::post('/patientRegister',[homeController::class,'store'])->name('registerPatient');
Route::get('/showRegister',[homeController::class,'showDoc'])->name('registerPatient');

Route::post('/doctorRegister',[homeController::class,'store2'])->name('registerDoctor');

//Route::post('/changeDoctor/{id}',[homeController::class,'changeDoctor'])->name('changeDoctor');
Route::delete('/delete/{id}',[homeController::class,'destroy'])->name('deleteDoctor');

Route::get('/update/{id}',[homeController::class,'updateDoctor']);
Route::get('/showAll',[homeController::class,'show']);

Route::put('update/maxUpdate/{id}',[homeController::class,'update']);

