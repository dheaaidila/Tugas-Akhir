<?php

use App\Http\Controllers\Admin\BmController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SdaController;
use App\Http\Controllers\Admin\PencarianSP2DController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Web\DashboardController as WebDashboardController;

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
    return redirect('login');
});
//  Route::resource('admin/persuratan', PersuratanController::class);
Route::prefix('admin')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('sda', SdaController::class);
    Route::resource('bm', BmController::class);
    Route::resource('ck', CkController::class);
    Route::resource('pencarian', PencarianSP2DController::class);
    Route::resource('user', UserController::class);

    Route::post('pencariansp2d', [PencarianSP2DController::class, 'search']);
    Route::post('admin/users', [UserController::class, 'store'])->name('users.store');
});

Route::prefix('pegawai')->group(function () {
    Route::resource('dashboard', WebDashboardController::class);
});
Route::get('login', [LoginController::class, 'showLogin']);
Route::post('login', [LoginController::class, 'loginProcess']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('refresh-captcha', function () {
    return response()->json(['captcha' => captcha_img('flat')]);
});
