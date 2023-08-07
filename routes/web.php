<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VmController;
use App\Http\Controllers\NgrokTunnelController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CloudflareController;
use App\Http\Controllers\DataPermissionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AssetsController;

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


// Resources First
Route::resource('assets', AssetsController::class);
Route::resource('users', UsersController::class);
Route::resource('vm', VmController::class);
Route::resource('Provider', ProviderController::class);
Route::resource('Ngroktunnel', NgrokTunnelController::class);
Route::resource('Cloudflare', CloudflareController::class);
Route::resource('DataPermission', DataPermissionController::class);
Route::resource('Roles', RolesController::class);
Route::resource('Domain', DomainController::class);
Route::resource('Company', CompanyController::class);



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/assets', [App\Http\Controllers\AssetsController::class, 'index'])->name('assets');



