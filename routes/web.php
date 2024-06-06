<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AccController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExportfileController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SatisController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login');
});

Route::get('/home', [HomeController::class, 'getHomeView']);

Route::get('/staff', [StaffController::class, 'getStaffView']);

Route::get('/acc', [AccController::class, 'getAccView']);

Route::get('/client', [ClientController::class, 'getClientView']);


Route::get('/exportfile', [ExportfileController::class, 'getExportfileView']);

Route::get('/house', [HouseController::class, 'getHouseView']);

Route::get('/product', [ProductController::class, 'getProductView']);

Route::get('/satis', [SatisController::class, 'getSatisView']);

Route::get('/supplier', [SupplierController::class, 'getSupplierView']);
