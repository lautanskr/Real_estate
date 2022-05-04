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
use App\Http\Controllers\RentPropertyController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\DependentDropdownController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisteredAgentController;
use App\Http\Controllers\LoginAgentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BuyController;


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

Route::group(['middleware'=>'auth'],function(){

Route::get('dashboard',[DashboardController::class,'index'] )->name('dashboard');
Route::get('dashboard1',[DashboardController::class,'dashboard1'] )->name('dashboard1');


Route::resource('countries', CountryController::class);
Route::resource('provinces', ProvinceController::class);
Route::resource('districts', DistrictController::class);
Route::resource('municipalities', MunicipalityController::class);
Route::resource('wards', WardController::class);
Route::resource('forSale', ForSaleController::class);
Route::resource('forRent', ForRentController::class);
Route::resource('saleProperty', SalePropertyController::class);
Route::resource('rentProperty', RentPropertyController::class);
Route::resource('propertyType', PropertyTypeController::class);
Route::resource('propertyCategories', PropertyCategoryController::class);


});



//for location setup
Route::get('getProvince',[DropdownController::class, 'getProvince'])->name('getProvince');
Route::get('getDistrict',[DropdownController::class, 'getDistrict'])->name('getDistrict');
Route::get('getMunicipality',[DropdownController::class, 'getMunicipality'])->name('getMunicipality');
Route::get('getProperty',[DropdownController::class, 'getProperty'])->name('getProperty');


//for sale Property
Route::get('getPro',[DependentDropdownController::class, 'getPro'])->name('getPro');
Route::get('getDis',[DependentDropdownController::class, 'getDis'])->name('getDis');
Route::get('getMun',[DependentDropdownController::class, 'getMun'])->name('getMun');
Route::get('getProp',[DependentDropdownController::class, 'getProp'])->name('getProp');

Route::get('RegisterAgent', [RegisteredAgentController::class, 'create'])->name('RegisterAgent');

Route::get('LoginAgent', [LoginAgentController::class, 'agentLogin'])->name('LoginAgent');

Route::post('/RegisterAgent', [RegisteredAgentController::class, 'store'])->name('registerAgent');

Route::post('/updateStatus', [RegisteredAgentController::class, 'updateStatus'])->name('agentUpdate');

Route::get('/agent', [RegisteredAgentController::class, 'index'])->name('agent');


//for frontend
Route::get('/', [FrontController::class, 'viewSale'])->name('index');

//for buye
Route::get('/buy', [BuyController::class, 'land'])->name('landbuy');
