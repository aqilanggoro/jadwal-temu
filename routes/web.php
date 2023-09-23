<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MelihatController;
use App\Http\Controllers\MultiUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesiController;

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
});

//Route::get('/scheduling',[EventController::class,'index'])->name('scheduling');
Route::resource('jadwal',EventController::class);
Route::resource('melihat',MelihatController::class);



Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);  
});

//agar halaman home bisa ke opd
Route::get('/home', function (){
    return redirect('/multiuser');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/multiuser',[MultiUserController::class,'index']);
    Route::get('/multiuser/kepala',[MultiUserController::class,'kepala'])->middleware('userAkses:kepala');
    Route::get('/multiuser/kel_bidang',[MultiUserController::class,'kel_bidang'])->middleware('userAkses:kel_bidang');
    Route::get('/multiuser/seketaris',[MultiUserController::class,'seketaris'])->middleware('userAkses:seketaris');
    Route::get('/multiuser/seksi',[MultiUserController::class,'seksi'])->middleware('userAkses:seksi');
    Route::get('/multiuser/a1',[MultiUserController::class,'a1'])->middleware('userAkses:a1');
    Route::get('/logout',[SesiController::class, 'logout']);
});
Route::get('Daftar',[RegisterController::class, 'form'])->name('admin.register');
Route::post('Daftar',[RegisterController::class,'simpan']);

