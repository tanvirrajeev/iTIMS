<?php

use Illuminate\Support\Facades\Route;
// use RealRashid\SweetAlert\Facades\Alert;



// Route::get('/', function () {
//     Alert::success('Success Title', 'Success Message');
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

// Settings 
Route::get('employeelist', 'EmployeeController@employeelist')->name('employeelist'); 
Route::resource('employee', 'EmployeeController');
Route::resource('division', 'DivisionController');
Route::get('divisionlist', 'DivisionController@divisionlist')->name('divisionlist'); 
Route::get('companylist', 'CompanyController@companylist')->name('companylist');
Route::resource('company', 'CompanyController');
Route::get('locationlist', 'LocationController@locationlist')->name('locationlist');
Route::resource('location', 'LocationController');
Route::resource('branch', 'BranchController');
Route::get('branchlist', 'BranchController@branchlist')->name('branchlist'); 
Route::resource('category', 'CategoryController');
Route::get('categorylist', 'CategoryController@categorylist')->name('categorylist');
Route::resource('manufacturer', 'ManufacturerController');
Route::get('manufacturerlist', 'ManufacturerController@manufacturerlist')->name('manufacturerlist');
Route::resource('astmodel', 'AstmodelController');
Route::get('astmodellist', 'AstmodelController@astmodellist')->name('astmodellist');
Route::resource('supplier', 'SupplierController');
Route::get('supplierlist', 'SupplierController@supplierlist')->name('supplierlist');
Route::get('getwarehouse', 'WarehouseController@getwarehouse')->name('getwarehouse');
Route::get('warehouselist', 'WarehouseController@warehouselist')->name('warehouselist');
Route::resource('warehouse', 'WarehouseController');

// Fixed Asset 
Route::get('asset/purchase', 'PurchaseController@index');
Route::get('asset/purchase/create', 'PurchaseController@create');
Route::post('asset/purchase/create', 'PurchaseController@store')->name('assetpurchase');
Route::get('/asset/details', 'AssetController@details')->name('assetdetails');
Route::get('/asset/assign', 'AssetController@assign')->name('assetassign');
Route::get('/asset/employeeassignment', 'AssetController@employeeassignment')->name('employeeassignment');
Route::get('/asset/assignmentdetails', 'AssetController@assignmentdetails')->name('assignmentdetails');
Route::get('/asset/deassignment', 'AssetController@deassignment')->name('deassignment');
Route::get('/asset/test', 'AssetController@test')->name('assettest');
Route::get('assetlist', 'AssetController@assetlist')->name('assetlist');
Route::resource('asset', 'AssetController');




