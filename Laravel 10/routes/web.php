<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DataSiswa;
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

route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
route::get('/datasiswa',[DataSiswa::class,'dataSiswa'])->name('admin.datasiswa');
route::get('/datasiswa/addsiswa',[DataSiswa::class,'add'])->name('admin.addsiswa');
route::get('/datasiswa/editsiswa/{id}',[DataSiswa::class,'edit'])->name('admin.editsiswa');
route::post('/insertsiswa',[DataSiswa::class,'insert'])->name('admin.insertsiswa');
route::post('/updatesiswa',[DataSiswa::class,'update'])->name('admin.updatesiswa');
route::get('/datasiswa/deletesiswa/{id}',[DataSiswa::class,'delete'])->name('admin.deletesiswa');
//baru
route::get('/test',[BookController::class,'databuku'])->name('admin.test');
route::get('/test/tambah',[BookController::class,'tambah'])->name('admin.tambahbuku');
route::post('/test/buat',[BookController::class,'buat'])->name('admin.buatbuku');
route::get('/test/ubah/{id}',[BookController::class,'ubah'])->name('admin.ubahbuku');
route::post('/test/update',[BookController::class,'update'])->name('admin.update');
route::get('/test/hapus/{id}',[BookController::class,'hapus'])->name('admin.hapus');
