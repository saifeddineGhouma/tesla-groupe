<?php

use Illuminate\Support\Facades\Route;


Route::get('companies','CompanyController@index')->name('companies.index');
Route::get('companies/create','CompanyController@create')->name('companies.create');

