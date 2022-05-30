<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home',[App\Http\Controllers\admin\DashboardController::class, 'indexProduk'])->name('admin.indexProduk');
    Route::get('admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'indexProduk'])->name('admin.indexProduk');
    Route::get('admin/dashboard/produk/tambah', [App\Http\Controllers\admin\DashboardController::class, 'addProduk'])->name('admin.produk.tambah');
    Route::post('admin/dashboard/produk/simpan', [App\Http\Controllers\admin\DashboardController::class, 'saveProduk'])->name('admin.produk.simpan');
    Route::get('admin/dashboard/produk/hapus/{id}', [App\Http\Controllers\admin\DashboardController::class, 'deleteProduk'])->name('admin.produk.hapus');
    Route::get('admin/dashboard/produk/edit/{id}', [App\Http\Controllers\admin\DashboardController::class, 'editProduk'])->name('admin.produk.edit');
    Route::post('admin/dashboard/produk/update/{id}', [App\Http\Controllers\admin\DashboardController::class, 'updateProduk'])->name('admin.produk.update');

    Route::get('admin/dashboard/admin', [App\Http\Controllers\admin\DashboardController::class, 'indexAdmin'])->name('admin.indexAdmin');
    Route::get('admin/dashboard/admin/tambah', [App\Http\Controllers\admin\DashboardController::class, 'addAdmin'])->name('admin.admin.tambah');
    Route::post('admin/dashboard/admin/simpan', [App\Http\Controllers\admin\DashboardController::class, 'saveAdmin'])->name('admin.admin.simpan');
    Route::get('admin/dashboard/admin/hapus/{id}', [App\Http\Controllers\admin\DashboardController::class, 'deleteAdmin'])->name('admin.admin.hapus');
    Route::get('admin/dashboard/admin/edit/{id}', [App\Http\Controllers\admin\DashboardController::class, 'editAdmin'])->name('admin.admin.edit');
    Route::post('admin/dashboard/admin/update/{id}', [App\Http\Controllers\admin\DashboardController::class, 'updateAdmin'])->name('admin.admin.update');

    Route::get('admin/dashboard/indikator', [App\Http\Controllers\admin\DashboardController::class, 'indexIndikator'])->name('admin.indexIndikator');
    Route::get('admin/dashboard/indikator/tambah', [App\Http\Controllers\admin\DashboardController::class, 'addIndikator'])->name('admin.indikator.tambah');
    Route::post('admin/dashboard/indikator/simpan', [App\Http\Controllers\admin\DashboardController::class, 'saveIndikator'])->name('admin.indikator.simpan');
    Route::get('admin/dashboard/indikator/hapus/{id}', [App\Http\Controllers\admin\DashboardController::class, 'deleteIndikator'])->name('admin.indikator.hapus');
    Route::get('admin/dashboard/indikator/edit/{id}', [App\Http\Controllers\admin\DashboardController::class, 'editIndikator'])->name('admin.indikator.edit');
    Route::post('admin/dashboard/indikator/update/{id}', [App\Http\Controllers\admin\DashboardController::class, 'updateIndikator'])->name('admin.indikator.update');

    
    Route::get('admin/dashboard/kelompokindikator', [App\Http\Controllers\admin\DashboardController::class, 'indexKelompokIndikator'])->name('admin.indexKelompokIndikator');
    Route::get('admin/dashboard/kelompokindikator/tambah', [App\Http\Controllers\admin\DashboardController::class, 'addKelompokIndikator'])->name('admin.kelompokindikator.tambah');
    Route::post('admin/dashboard/kelompokindikator/simpan', [App\Http\Controllers\admin\DashboardController::class, 'saveKelompokIndikator'])->name('admin.kelompokindikator.simpan');
    Route::get('admin/dashboard/kelompokindikator/hapus/{id}', [App\Http\Controllers\admin\DashboardController::class, 'deleteKelompokIndikator'])->name('admin.kelompokindikator.hapus');
    Route::get('admin/dashboard/kelompokindikator/edit/{id}', [App\Http\Controllers\admin\DashboardController::class, 'editKelompokIndikator'])->name('admin.kelompokindikator.edit');
    Route::post('admin/dashboard/kelompokindikator/update/{id}', [App\Http\Controllers\admin\DashboardController::class, 'updateKelompokIndikator'])->name('admin.kelompokindikator.update');

    Route::get('admin/dashboard/merk', [App\Http\Controllers\admin\DashboardController::class, 'indexMerk'])->name('admin.indexMerk');
    Route::get('admin/dashboard/merk/tambah', [App\Http\Controllers\admin\DashboardController::class, 'addMerk'])->name('admin.merk.tambah');
    Route::post('admin/dashboard/merk/simpan', [App\Http\Controllers\admin\DashboardController::class, 'saveMerk'])->name('admin.merk.simpan');
    Route::get('admin/dashboard/merk/hapus/{id}', [App\Http\Controllers\admin\DashboardController::class, 'deleteMerk'])->name('admin.merk.hapus');
    Route::get('admin/dashboard/merk/edit/{id}', [App\Http\Controllers\admin\DashboardController::class, 'editMerk'])->name('admin.merk.edit');
    Route::post('admin/dashboard/merk/update/{id}', [App\Http\Controllers\admin\DashboardController::class, 'updateMerk'])->name('admin.merk.update');

    Route::get('admin/dashboard/rules', [App\Http\Controllers\admin\DashboardController::class, 'indexRules'])->name('admin.indexRules');
});


