<?php

use App\Http\Controllers\autoCompleteController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\mobilController;
use App\Http\Controllers\pengirimanController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\viewController;
use App\Models\barang;
use App\Models\karyawan;
use App\Models\supplier;
use Illuminate\Support\Facades\Route;


Route::get('/', [transaksiController::class, 'view'])->name('welcome');

Route::post('/submitTransaksi', [transaksiController::class, 'submitTransaksi'])->name('submitTransaksi');
Route::get('/viewTransaksi', [transaksiController::class, 'viewTransaksi'])->name('viewTransaksi');

Route::get('/viewPengiriman', [pengirimanController::class, 'viewPengiriman'])->name('viewPengiriman');
Route::post('/viewPengiriman/submit', [pengirimanController::class, 'submitPengiriman'])->name('submitPengiriman');
Route::get('/viewPengiriman/autocomplete', [pengirimanController::class, 'autocomplete']);
Route::get('/viewPengiriman/autocompletes', [pengirimanController::class, 'autocompletes']);
Route::get('/viewTransaksi/lunas', [transaksiController::class, 'lunas'])->name('lunas');
Route::get('/viewTransaksi/ngutang', [transaksiController::class, 'ngutang'])->name('ngutang');

Route::get('/autocompletes', [supplierController::class, 'autocompletes']);

Route::get('/barang', [barangController::class, 'view'])->name('barang.view');
Route::get('/barang/add', [barangController::class, 'add'])->name('barang.add');
Route::get('/barang/info', [barangController::class, 'info'])->name('barang.info');
Route::get('/barang/edit/{idBarang}', [barangController::class,'edit'])->name('barang.edit');
Route::post('/barang/update/{idBarang}', [barangController::class,'update'])->name('barang.update');
Route::post('/barang/submitBarang', [barangController::class, 'submitBarang'])->name('barang.submitBarang');
Route::post('/barang/delete/{idBarang}', [barangController::class,'delete'])->name('barang.delete');

Route::get('/karyawan', [karyawanController::class, 'view'])->name('karyawan.view');
Route::get('/karyawan/bon', [karyawanController::class, 'addBon'])->name('karyawan.bon');
Route::get('/karyawan/gaji', [karyawanController::class, 'addGaji'])->name('karyawan.gaji');
Route::get('/karyawan/edit/{nik}', [karyawanController::class,'edit'])->name('karyawan.edit');
Route::post('/karyawan/update/{nik}', [karyawanController::class,'update'])->name('karyawan.update');
Route::get('/karyawan/bon/autocomplete', [KaryawanController::class, 'autocomplete']);
Route::get('/karyawan/gaji/autocomplete', [KaryawanController::class, 'autocomplete']);
Route::post('/karyawan/ngebon', [karyawanController::class, 'ngebon'])->name('karyawan.ngebon');
Route::post('/karyawan/gaji', [karyawanController::class, 'gaji'])->name('karyawan.gaji');
Route::get('/karyawan/add', [karyawanController::class,'addKaryawan'])->name('karyawan.add');
Route::post('/karyawan/delete/{nik}', [karyawanController::class,'delete'])->name('karyawan.delete');
Route::post('/karyawan/submitKaryawan', [karyawanController::class, 'submitKaryawan'])->name('karyawan.submitKaryawan');

Route::get('/mobil', [mobilController::class, 'view'])->name('mobil.view');
Route::get('/mobil/add', [mobilController::class, 'addMobil'])->name('mobil.add');
Route::post('/mobil/submitMobil', [mobilController::class, 'submitMobil'])->name('mobil.submitMobil');
Route::post('/mobil/delete/{platKendaraan}', [mobilController::class,'delete'])->name('mobil.delete');

Route::get('/supplier', [supplierController::class, 'view'])->name('supplier.view');
Route::get('/supplier/add', [supplierController::class, 'addSupplier'])->name('supplier.add');
Route::get('/supplier/pemasokkanBarang', [supplierController::class, 'pemasokkanBarang'])->name('supplier.masokBarang');
Route::get('/supplier/pemasokkanBarang/autocomplete', [supplierController::class, 'autocomplete']);
Route::get('/supplier/pemasokkanBarang/autocompletes', [supplierController::class, 'autocompletes']);
Route::post('/supplier/submitStok', [supplierController::class, 'submitStok'])->name('supplier.submitStok');
Route::post('/supplier/delete/{idSupplier}', [supplierController::class,'delete'])->name('supplier.delete');
Route::post('/supplier/submitSupplier', [supplierController::class, 'submitSupplier'])->name('supplier.submitSupplier');
Route::get('/supplier/edit/{idSupplier}', [supplierController::class,'edit'])->name('supplier.edit');
Route::post('/supplier/update/{idSupplier}', [supplierController::class,'update'])->name('supplier.update');


Route::get('/view', [viewController::class, 'view'])->name('view.view');
Route::get('/history', [viewController::class, 'history'])->name('view.history');
Route::get('/statusPengiriman', [viewController::class, 'status'])->name('view.status');
Route::get('/about', [viewController::class, 'about'])->name('view.about');