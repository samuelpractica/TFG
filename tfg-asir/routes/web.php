<?php

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

Route::get('/', function () {
    return view('welcome');
});

# Employees
use App\Http\Controllers\EmployeeController;

Route::resource('employees', EmployeeController::class);

# PointOfSales
use App\Http\Controllers\PointOfSaleController;

Route::resource('pointofsales', PointOfSaleController::class);

# Invoices
use App\Http\Controllers\InvoiceController;

Route::resource('invoices', InvoiceController::class);

# Customers
use App\Http\Controllers\CustomerController;

Route::resource('customers', CustomerController::class);

# Orders
use App\Http\Controllers\OrderController;

Route::resource('orders', OrderController::class);

# Resources
use App\Http\Controllers\ResourceController;

Route::resource('resources', ResourceController::class);

# Tables
use App\Http\Controllers\TableController;

Route::resource('tables', TableController::class);