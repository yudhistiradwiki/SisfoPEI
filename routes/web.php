<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\TahunAkadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KrsController;

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
    return view('home');
}) -> middleware('auth');


//login
Route::get('/login', [LoginController::class, 'index']) -> name('login') -> middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);


//mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']) -> middleware('auth');
Route::get('/mahasiswa/insert', [MahasiswaController::class, 'tambah']) -> middleware('auth');;
Route::post('/mahasiswa/save', [MahasiswaController::class, 'simpan'])-> middleware('auth');;
Route::get('/mahasiswa/update/{nim}', [MahasiswaController::class, 'edit'])-> middleware('auth');;
Route::post('/mahasiswa/updated/{nim}', [MahasiswaController::class, 'update'])-> middleware('auth');;
Route::get('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'delete'])-> middleware('auth');;
Route::get('/mahasiswa/detail/{nim}', [MahasiswaController::class, 'detail'])-> middleware('auth');;
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cari'])-> middleware('auth');;


//prodi
Route::get('/prodi', [ProdiController::class, 'index'])-> middleware('auth');;
Route::get('/prodi/insert', [ProdiController::class, 'tambah'])-> middleware('auth');;
Route::post('/prodi/save', [ProdiController::class, 'simpan'])-> middleware('auth');;
Route::get('/prodi/update/{nim}', [ProdiController::class, 'edit'])-> middleware('auth');;
Route::post('/prodi/updated/{nim}', [ProdiController::class, 'update'])-> middleware('auth');;
Route::get('/prodi/delete/{nim}', [ProdiController::class, 'delete'])-> middleware('auth');;
Route::get('/prodi/cari', [ProdiController::class, 'cari'])-> middleware('auth');;


//dosen
Route::get('/dosen', [DosenController::class, 'index'])-> middleware('auth');;
Route::get('/dosen/insert', [DosenController::class, 'tambah'])-> middleware('auth');;
Route::post('/dosen/save', [DosenController::class, 'simpan'])-> middleware('auth');;
Route::get('/dosen/update/{nim}', [DosenController::class, 'edit'])-> middleware('auth');;
Route::post('/dosen/updated/{nim}', [DosenController::class, 'update'])-> middleware('auth');;
Route::get('/dosen/delete/{nim}', [DosenController::class, 'delete'])-> middleware('auth');;
Route::get('/dosen/detail/{nim}', [DosenController::class, 'detail'])-> middleware('auth');;
Route::get('/dosen/cari', [DosenController::class, 'cari'])-> middleware('auth');;


//matkul
Route::get('/matkul', [MatkulController::class, 'index'])-> middleware('auth');;
Route::get('/matkul/insert', [MatkulController::class, 'tambah'])-> middleware('auth');;
Route::post('/matkul/save', [MatkulController::class, 'simpan'])-> middleware('auth');;
Route::get('/matkul/update/{nim}', [MatkulController::class, 'edit'])-> middleware('auth');;
Route::post('/matkul/updated/{nim}', [MatkulController::class, 'update'])-> middleware('auth');;
Route::get('/matkul/delete/{nim}', [MatkulController::class, 'delete'])-> middleware('auth');;
Route::get('/matkul/detail/{nim}', [MatkulController::class, 'detail'])-> middleware('auth');;
Route::get('/matkul/cari', [MatkulController::class, 'cari'])-> middleware('auth');;


//tahun akademik
Route::get('/tahunakad', [TahunAkadController::class, 'index'])-> middleware('auth');;
Route::get('/tahunakad/insert', [TahunAkadController::class, 'tambah'])-> middleware('auth');;
Route::post('/tahunakad/save', [TahunAkadController::class, 'simpan'])-> middleware('auth');;
Route::get('/tahunakad/update/{nim}', [TahunAkadController::class, 'edit'])-> middleware('auth');;
Route::post('/tahunakad/updated/{nim}', [TahunAkadController::class, 'update'])-> middleware('auth');;
Route::get('/tahunakad/delete/{nim}', [TahunAkadController::class, 'delete'])-> middleware('auth');;
Route::get('/tahunakad/cari', [TahunAkadController::class, 'cari'])-> middleware('auth');;

//krs
Route::get('/krs', function () {
    return view('krs-select');
}) -> middleware('auth');

Route::get('/krs/view', function () {
    return view('krs-list');
}) -> middleware('auth');

Route::get('/krs/view/{nim}/{thn}', [KrsController::class, 'search2']);

Route::get('/nilai', function () {
    return view('nilai-select');
}) -> middleware('auth');


Route::get('/nilai/view', function () {
    return view('nilai-list');
}) -> middleware('auth');

Route::get('/khs', function () {
    return view('khs-select');
}) -> middleware('auth');


Route::get('/khs/view', function () {
    return view('khs-list');
}) -> middleware('auth');
