<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ColorPaletteController;
use App\Http\Controllers\CompanyPageController;

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
    return view('index');
});


Route::get('companies', [CompanyController::class, 'index']);
Route::get('companies/{companies:slug}', [CompanyController::class, 'show']);

Route::get('company', [CompanyController::class, 'index']);

Route::get('company-pages', [CompanyPageController::class, 'index']);

Route::get('color-palettes', [ColorPaletteController::class, 'index']);