<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController; 
use App\Http\Controllers\KelasController; 
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\agendagurucontroller;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\MapelController; 


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

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::post('/registernew', [LoginController::class, 'registernew']);
Route::post('/registernew',[LoginController::class, 'registernew']);

    // guru
    Route::get('/mapel',[MapelController::class, 'mapel'])->name('mapel');
    Route::post('/storemapel',[MapelController::class, 'store']);
    Route::get('/editmapel{id}',[MapelController::class, 'editmapel']);
    // Route::put('/updatedata/{id}',[GuruController::class, 'update']);
    // Route::delete('/delete/{id}',[GuruController::class, 'destroy']);



Route::middleware(['auth:user','hakakses:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    
    // guru
    Route::get('/guru',[GuruController::class, 'guru'])->name('guru');
    Route::get('/tambahguru',[GuruController::class, 'tambahguru']);
    Route::post('/store',[GuruController::class, 'store']);
    Route::get('/editguru/{id}',[GuruController::class, 'editguru']);
    Route::put('/updatedata/{id}',[GuruController::class, 'update']);
    Route::delete('/delete/{id}',[GuruController::class, 'destroy']);
    
    // kelas
    Route::get('/kelas',[KelasController::class, 'kelas'])->name('kelas');
    Route::post('/storekelas',[KelasController::class, 'store']);
    Route::get('/editkelas/{id}',[KelasController::class, 'editkelas']);
    Route::put('/updatekelas/{id}',[KelasController::class, 'updatekelas']);
    Route::delete('/deletekelas/{id}',[KelasController::class, 'destroy']);
    
    // agenda
    Route::get('/agenda',[AgendaController::class, 'agenda'])->name('agenda'); 
    Route::get('/tambahagenda',[AgendaController::class, 'tambahagenda']);
    Route::post('/storeagenda',[AgendaController::class, 'store']);
    Route::get('/editagenda/{id}',[AgendaController::class, 'editagenda']);
    Route::put('/updateagenda/{id}',[AgendaController::class, 'update']);
    Route::delete('/deleteagenda/{id}',[AgendaController::class, 'destroy']);

});
// agendaguru
Route::middleware(['auth:guru','hakakses:user'])->group(function () {
    Route::get('/agendaguru', [agendagurucontroller::class, 'agendaguru'])->name('agendaguru');
    Route::get('/tambahagendaguru',[agendagurucontroller::class, 'tambahagenda']);
    Route::post('/storeagendaguru',[agendagurucontroller::class, 'store']);
    Route::get('/editagendaguru/{id}',[agendagurucontroller::class, 'editagenda']);
    Route::put('/updateagendaguru/{id}',[agendagurucontroller::class, 'update']);
    Route::delete('/deleteagendaguru/{id}',[agendagurucontroller::class, 'destroy']);
});
