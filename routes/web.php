<?php

use App\Http\Controllers\Admin\WarehousesController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use Spatie\WelcomeNotification\WelcomesNewUsers;
use App\Http\Controllers\Admin\MyWelcomeController;
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

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function() {
    Route::get('welcome/{user}', [MyWelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [MyWelcomeController::class, 'savePassword']);
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');

    Route::resource('category', CategoriesController::class);

    //SuperAdmin
    Route::resource('warehouse', WarehousesController::class);
    Route::get('staff', [StaffController::class, 'index'])->name('staff.index');
});
