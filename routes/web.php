<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\TahunAkadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KhsController;

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
}) -> middleware('auth:user,mahasiswa');


//login
Route::get('/login', [LoginController::class, 'index']) -> name('login') -> middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);


//mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']) -> middleware('auth:user,mahasiswa');
Route::get('/mahasiswa/insert', [MahasiswaController::class, 'tambah']) -> middleware('auth:user,mahasiswa');;
Route::post('/mahasiswa/save', [MahasiswaController::class, 'simpan'])-> middleware('auth:user,mahasiswa');;
Route::get('/mahasiswa/update/{nim}', [MahasiswaController::class, 'edit'])-> middleware('auth:user,mahasiswa');;
Route::post('/mahasiswa/updated/{nim}', [MahasiswaController::class, 'update'])-> middleware('auth:user,mahasiswa');;
Route::get('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'delete'])-> middleware('auth:user,mahasiswa');;
Route::get('/mahasiswa/detail/{nim}', [MahasiswaController::class, 'detail'])-> middleware('auth:user,mahasiswa');;
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cari'])-> middleware('auth:user,mahasiswa');;


//prodi
Route::get('/prodi', [ProdiController::class, 'index'])-> middleware('auth:user,mahasiswa');;
Route::get('/prodi/insert', [ProdiController::class, 'tambah'])-> middleware('auth:user,mahasiswa');;
Route::post('/prodi/save', [ProdiController::class, 'simpan'])-> middleware('auth:user,mahasiswa');;
Route::get('/prodi/update/{nim}', [ProdiController::class, 'edit'])-> middleware('auth:user,mahasiswa');;
Route::post('/prodi/updated/{nim}', [ProdiController::class, 'update'])-> middleware('auth:user,mahasiswa');;
Route::get('/prodi/delete/{nim}', [ProdiController::class, 'delete'])-> middleware('auth:user,mahasiswa');;
Route::get('/prodi/cari', [ProdiController::class, 'cari'])-> middleware('auth:user,mahasiswa');;


//dosen
Route::get('/dosen', [DosenController::class, 'index'])-> middleware('auth:user,mahasiswa');;
Route::get('/dosen/insert', [DosenController::class, 'tambah'])-> middleware('auth:user,mahasiswa');;
Route::post('/dosen/save', [DosenController::class, 'simpan'])-> middleware('auth:user,mahasiswa');;
Route::get('/dosen/update/{nim}', [DosenController::class, 'edit'])-> middleware('auth:user,mahasiswa');;
Route::post('/dosen/updated/{nim}', [DosenController::class, 'update'])-> middleware('auth:user,mahasiswa');;
Route::get('/dosen/delete/{nim}', [DosenController::class, 'delete'])-> middleware('auth:user,mahasiswa');;
Route::get('/dosen/detail/{nim}', [DosenController::class, 'detail'])-> middleware('auth:user,mahasiswa');;
Route::get('/dosen/cari', [DosenController::class, 'cari'])-> middleware('auth:user,mahasiswa');;


//matkul
Route::get('/matkul', [MatkulController::class, 'index'])-> middleware('auth:user,mahasiswa');;
Route::get('/matkul/insert', [MatkulController::class, 'tambah'])-> middleware('auth:user,mahasiswa');;
Route::post('/matkul/save', [MatkulController::class, 'simpan'])-> middleware('auth:user,mahasiswa');;
Route::get('/matkul/update/{nim}', [MatkulController::class, 'edit'])-> middleware('auth:user,mahasiswa');;
Route::post('/matkul/updated/{nim}', [MatkulController::class, 'update'])-> middleware('auth:user,mahasiswa');;
Route::get('/matkul/delete/{nim}', [MatkulController::class, 'delete'])-> middleware('auth:user,mahasiswa');;
Route::get('/matkul/detail/{nim}', [MatkulController::class, 'detail'])-> middleware('auth:user,mahasiswa');;
Route::get('/matkul/cari', [MatkulController::class, 'cari'])-> middleware('auth:user,mahasiswa');;


//tahun akademik
Route::get('/tahunakad', [TahunAkadController::class, 'index'])-> middleware('auth:user,mahasiswa');;
Route::get('/tahunakad/insert', [TahunAkadController::class, 'tambah'])-> middleware('auth:user,mahasiswa');;
Route::post('/tahunakad/save', [TahunAkadController::class, 'simpan'])-> middleware('auth:user,mahasiswa');;
Route::get('/tahunakad/update/{nim}', [TahunAkadController::class, 'edit'])-> middleware('auth:user,mahasiswa');;
Route::post('/tahunakad/updated/{nim}', [TahunAkadController::class, 'update'])-> middleware('auth:user,mahasiswa');;
Route::get('/tahunakad/delete/{nim}', [TahunAkadController::class, 'delete'])-> middleware('auth:user,mahasiswa');;
Route::get('/tahunakad/cari', [TahunAkadController::class, 'cari'])-> middleware('auth:user,mahasiswa');;

//krs
Route::get('/krs', [KrsController::class, 'select'])-> middleware('auth:user,mahasiswa');

/*Route::get('/krs/view', function () {
    return view('krs-list');
}) -> middleware('auth');
*/

Route::get('/krs/view', function () {
    return view('krs-listt');
}) -> middleware('auth:user,mahasiswa');

Route::get('/krs/view/{nim}/{thn}', [KrsController::class, 'coba']);


Route::get('/nilai/view/{kode_matakuliah}/{thn}', [NilaiController::class, 'coba']);


Route::get('/khs/view/{nim}/{thn}', [KhsController::class, 'coba']);

Route::get('/nilai', function () {
    return view('nilai-select');
}) -> middleware('auth:user,mahasiswa');


Route::get('/nilai/view', function () {
    return view('nilai-list');
}) -> middleware('auth:user,mahasiswa');

Route::get('/khs', function () {
    return view('khs-select');
}) -> middleware('auth:user,mahasiswa');


Route::get('/khs/view', function () {
    return view('khs-list');
}) -> middleware('auth:user,mahasiswa');
