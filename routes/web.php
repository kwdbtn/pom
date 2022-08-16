<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\OutageController;
use App\Http\Controllers\ProtectionController;
use App\Http\Controllers\StationController;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\OutageController::class, 'index'])->name('home');

    Route::post('outages/{outage}/approve', [OutageController::class, 'approve'])->name('outages.approve');

    // Route::post('outages/{outage}/approval', [OutageController::class, 'approve'])

    Route::resources([
        'stations'    => StationController::class,
        'protections' => ProtectionController::class,
        'equipment'   => EquipmentController::class,
        'outages'     => OutageController::class,
    ]);
});
