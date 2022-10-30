<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Operasional\BahanBakuController;
use App\Http\Controllers\Operasional\DashboardController as OperasionalDashboardController;
use App\Http\Controllers\Operasional\PemakaianBahanBakuController;
use App\Http\Controllers\Operasional\PembelianBahanBakuController;
use App\Http\Controllers\Owner\DashboardController as OwnerDashboardController;
use App\Http\Controllers\Owner\MenuController;
use App\Http\Controllers\Owner\ReportController;
use App\Http\Controllers\Owner\UserController;
use App\Http\Controllers\Penjualan\DashboardController as PenjualanDashboardController;
use App\Http\Controllers\Penjualan\TransaksiController;
use Illuminate\Support\Facades\Auth;
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

//login

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.process');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function(){
    Route::get('profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');
    Route::post('profile', [AuthController::class, 'updateprofile'])->name('profile.update')->middleware('auth');

});


Route::get('cek', [AuthController::class, 'cek'])->name('ceklogin');


Route::group(
    [
        'middleware' => ['isOwner'],
        'prefix' => 'owner'
    ],
    function () {
        Route::get('dashboard', [OwnerDashboardController::class, 'dashboard'])->name('owner.dashboard');
        Route::get('/', [OwnerDashboardController::class, 'dashboard'])->name('owner');
        Route::get('pembelianbahanbaku', [ReportController::class, 'pembelianbahanbaku'])->name('owner.pembelianbahanbaku');
        Route::get('transaksi', [ReportController::class, 'transaksi'])->name('owner.transaksi');
        Route::resource('user', UserController::class);
        Route::resource('menu', MenuController::class);
    }
);
Route::group([
    'middleware' => ['isOperasional'],
    'prefix' => 'operasional'
], function () {
    Route::get('/', [OperasionalDashboardController::class, 'index'])->name('operasional');
    Route::get('dashboard', [OperasionalDashboardController::class, 'index'])->name('operasional.dashboard');

    Route::resource('bahanbaku',BahanBakuController::class);
    Route::resource('pembelianbahanbaku',PembelianBahanBakuController::class);
    Route::resource('pemakaianbahanbaku',PemakaianBahanBakuController::class);
});

Route::group([
    'middleware' => ['isPenjualan'],
    'prefix' => 'penjualan'
], function () {
    Route::get('/', [PenjualanDashboardController::class, 'index'])->name('penjualan');
    Route::get('dashboard', [PenjualanDashboardController::class, 'index'])->name('penjualan.dashboard');
    Route::resource('transaksi', TransaksiController::class);
});


Route::get('/', [LoginController::class, 'index'])->name('welcome');
