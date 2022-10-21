<?php

use App\Http\Controllers\DaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LpjController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\SbdplController;
use App\Http\Controllers\SbdppController;
use App\Http\Controllers\VallpjController;
use App\Http\Controllers\ValproController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('Dashboard');
    });
});


Route::group(['middleware' => ['auth', 'ceklevel:User']], function () {
    Route::get('/Proposall', [ProposalController::class, 'Proposall']);
    Route::get('/createlpj', [LpjController::class, 'createlpj']);
    Route::post('/insertdataproposal', [ProposalController::class, 'store']);
    Route::post('/insertdatalpj', [LpjController::class, 'store']);
    Route::get('/keterangan/{id}', [LpjController::class, 'keterangan']);
    Route::get('/sbdpp', [SbdppController::class, 'index']);
    Route::get('/sbdpl', [SbdplController::class, 'index']);
});


Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    Route::get('/Dpp', [ProposalController::class, 'index'])->name('Dpp');
    Route::get('/Dpl', [LpjController::class, 'index'])->name('Dpl');

    Route::get('/Dpp', [ValproController::class, 'index'])->name('Dpp');
    Route::get('/Dpp/{id}/setuju', [ValproController::class, 'setuju']);
    Route::get('/Dpp/{id}/revisi', [ValproController::class, 'revisi']);
    Route::get('/Dpp/{id}/tolak', [ValproController::class, 'tolak']);

    Route::get('/Dpl/{id}/setuju', [VallpjController::class, 'setuju']);
    Route::get('/Dpl/{id}/revisi', [VallpjController::class, 'revisi']);
    Route::get('/Dpl/{id}/tolak', [VallpjController::class, 'tolak']);
});

Route::get('/Dashboard', [DaController::class, 'Dashboard'])->name(('Dashboard'));

Route::get('/uploadfile', 'UploadController@index');
Route::post('/uploadfile', 'UploadController@store');

Route::get('/registrasi', [LoginController::class, 'registrasi'])->name(('registrasi'));
Route::post('/saveregistrasi', [LoginController::class, 'saveregistrasi'])->name(('saveregistrasi'));
Route::get('/Login', function () {
    return view('login');
})->name('login');
Route::post('/proseslogin', [LoginController::class, 'proseslogin'])->name(('proseslogin'));
Route::get('/logout', [LoginController::class, 'logout'])->name(('logout'));
