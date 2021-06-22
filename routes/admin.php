<?php

use Illuminate\Support\Facades\Route;


Route::get('companies','CompanyController@index')->name('companies.index');
Route::get('companies/create','CompanyController@create')->name('companies.create');
Route::post('companies/store','CompanyController@store')->name('companies.store');

Route::get('services/create/{company_id}','ServiceController@create')->name('services.create');
Route::post('services/store','ServiceController@store')->name('services.store');

Route::get('projects/create/{company_id}','ProjectController@create')->name('projects.create');
Route::post('projects/store','ProjectController@store')->name('projects.store');