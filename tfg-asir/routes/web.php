<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para AnalysisController
Route::get('/analysis', 'AnalysisController@index')->name('analysis.index');
Route::post('/analysis', 'AnalysisController@generateReport')->name('analysis.generateReport');

// Rutas para CustomerController
Route::get('/customers', 'CustomerController@index')->name('customers.index');
Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
Route::post('/customers', 'CustomerController@store')->name('customers.store');
Route::get('/customers/{customer}', 'CustomerController@show')->name('customers.show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit');
Route::put('/customers/{customer}', 'CustomerController@update')->name('customers.update');
Route::delete('/customers/{customer}', 'CustomerController@destroy')->name('customers.destroy');

// Rutas para TableAssignmentController
Route::get('/table-assignments', 'TableAssignmentController@index')->name('table-assignments.index');
Route::get('/table-assignments/create', 'TableAssignmentController@create')->name('table-assignments.create');
Route::post('/table-assignments', 'TableAssignmentController@store')->name('table-assignments.store');
Route::get('/table-assignments/{table_assignment}', 'TableAssignmentController@show')->name('table-assignments.show');
Route::get('/table-assignments/{table_assignment}/edit', 'TableAssignmentController@edit')->name('table-assignments.edit');
Route::put('/table-assignments/{table_assignment}', 'TableAssignmentController@update')->name('table-assignments.update');
Route::delete('/table-assignments/{table_assignment}', 'TableAssignmentController@destroy')->name('table-assignments.destroy');

// Rutas para OrderController
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
Route::get('/orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('/orders/{order}', 'OrderController@update')->name('orders.update');
Route::delete('/orders/{order}', 'OrderController@destroy')->name('orders.destroy');

// Rutas para PointOfSaleController
Route::get('/point-of-sale', 'PointOfSaleController@index')->name('point-of-sale.index');
Route::get('/point-of-sale/create', 'PointOfSaleController@create')->name('point-of-sale.create');
Route::post('/point-of-sale', 'PointOfSaleController@store')->name('point-of-sale.store');
Route::get('/point-of-sale/{point_of_sale}', 'PointOfSaleController@show')->name('point-of-sale.show');
Route::get('/point-of-sale/{point_of_sale}/edit', 'PointOfSaleController@edit')->name('point-of-sale.edit');
Route::put('/point-of-sale/{point_of_sale}', 'PointOfSaleController@update')->name('point-of-sale.update');
Route::delete('/point-of-sale/{point_of_sale}', 'PointOfSaleController@destroy')->name('point-of-sale.destroy');

