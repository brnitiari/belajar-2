<?php

use App\Http\Controllers\RegistedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JadwaladminController;
use App\Http\Controllers\AbsensiController;




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
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/registeds',               [RegistedController::class,'index'])        ->name('registeds.index');
Route::post('/registeds/store',        [RegistedController::class,'store'])        ->name('registeds.store');
Route::get('/registeds/create',        [RegistedController::class,'create'])       ->name('registeds.create');
Route::get('/registeds/show',          [RegistedController::class,'show'])       ->name('registeds.show');
Route::get('/registeds/edit',          [RegistedController::class,'edit'])       ->name('registeds.edit');
Route::put('/registeds/update',        [RegistedController::class,'update'])    ->name('registeds.update');
Route::delete('/registeds/destroy',    [RegistedController::class,'destroy'])   ->name('registeds.destroy');
Route::get('/registeds/absen',         [RegistedController::class,'absen'])      ->name('absensis.create');
Route::get('/registeds/absen/mahasiswas',[RegistedController::class,'createA'])      ->name('absensis.create');
Route::get('/registeds/mahasiswas',     [RegistedController::class,'indexM'])    ->name('mahasiswas.indexM');
Route::get('/registeds/mahasiswas/create', [RegistedController::class,'createM'])       ->name('mahasiswas.createM');
Route::post('/registeds/mahasiswas/store',        [RegistedController::class,'storeM'])        ->name('mahasiswas.storeM');
Route::get('/registeds/absensis/store/absensis',   [RegistedController::class,'indexA'])    ->name('absensis.indexA');
Route::post('/registeds/absensis/store',        [RegistedController::class,'storeA'])        ->name('absensis.storeA');



// Route::get('/mahasiswas',               [MahasiswaController::class,'indexM'])    ->name('mahasiswas.indexM');
Route::post('/mahasiswas/store',        [MahasiswaController::class,'store'])        ->name('mahasiswas.store');
Route::get('/mahasiswas/create',        [MahasiswaController::class,'create'])       ->name('mahasiswas.create');
Route::get('/mahasiswas/show',          [MahasiswaController::class,'show'])       ->name('mahasiswas.show');
Route::get('/mahasiswas/edit',          [MahasiswaController::class,'edit'])       ->name('mahasiswas.edit');
Route::put('/mahasiswas/update',        [MahasiswaController::class,'update'])    ->name('mahasiswas.update');
Route::delete('/mahasiswas/destroy',    [MahasiswaController::class,'destroy'])   ->name('mahasiswas.destroy');
Route::get('/mahasiswas/dass',               [MahasiswaController::class,'dass']) ;

Route::get('/jadwaladmins',               [JadwaladminController::class,'indexja'])    ->name('jadwaladmins.indexja');
Route::post('/jadwaladmins/store',        [JadwaladminController::class,'storeja'])        ->name('jadwaladmins.storeja');
Route::get('/jadwaladmins/create',        [JadwaladminController::class,'createja'])       ->name('jadwaladmins.createja');
Route::get('/jadwaladmins/show',          [JadwaladminController::class,'showja'])       ->name('jadwaladmins.showja');
Route::get('/jadwaladmins/edit',          [JadwaladminController::class,'editja'])       ->name('jadwaladmins.editja');
Route::put('/jadwaladmins/update',        [JadwaladminController::class,'updateja'])    ->name('jadwaladmins.updateja');
Route::delete('/jadwaladmins/destroy',    [JadwaladminController::class,'destroyja'])   ->name('jadwaladmins.destroyja');

Route::get('/absensis',               [AbsensiController::class,'indexja'])    ->name('absensis.indexja');
Route::post('/absensis/store',        [AbsensiController::class,'store'])        ->name('absensis.store');
Route::get('/absensis/create',        [AbsensiController::class,'create'])       ->name('absensis.create');
Route::get('/absensis/show',          [AbsensiController::class,'show'])       ->name('absensis.show');
Route::get('/absensis/edit',          [AbsensiController::class,'edit'])       ->name('absensis.edit');
Route::put('/absensis/update',        [AbsensiController::class,'update'])    ->name('absensis.update');
Route::delete('/absensis/destroy',    [AbsensiController::class,'destroy'])   ->name('absensis.destroy');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
