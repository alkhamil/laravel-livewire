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

Route::livewire('/', 'dashboard.index')->layout('layouts.app')->name('dashboard.index');
Route::livewire('/user', 'user.index')->layout('layouts.app')->name('user.index');
Route::livewire('/user/create', 'user.create')->layout('layouts.app')->name('user.create');
Route::livewire('/user/edit/{id}', 'user.edit')->layout('layouts.app')->name('user.edit');
