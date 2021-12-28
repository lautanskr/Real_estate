<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\ForSaleController;
use App\Http\Controllers\ForRentController;
use App\Http\Controllers\SalePropertyController;
use App\Http\Controllers\PropertyTypeController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



  
Route::resource('countries', CountryController::class);
Route::resource('provinces', ProvinceController::class);
Route::resource('districts', DistrictController::class);
Route::resource('municipalities', MunicipalityController::class);
Route::resource('wards', WardController::class);
Route::resource('forSale', ForSaleController::class);
Route::resource('forRent', ForRentController::class);
Route::resource('saleProperty', SalePropertyController::class);
Route::resource('propertyType', PropertyTypeController::class);
Route::resource('propertyCategories', PropertyCategoryController::class);


Route::get('dropdown',[DropdownController::class, 'index']);

Route::get('getProvince',[DropdownController::class, 'getProvince'])->name('getProvince');
Route::get('getDistrict',[DropdownController::class, 'getDistrict'])->name('getDistrict');
Route::get('getMunicipality',[DropdownController::class, 'getMunicipality'])->name('getMunicipality');
Route::get('getProperty',[DropdownController::class, 'getProperty'])->name('getProperty');


