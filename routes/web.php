<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;

Route::get('/', [crudController::class, 'phone_list'])->name('phone_list');
Route::get('/add_form', [crudController::class, 'add_form'])->name('add_form');
Route::post('/add_form', [crudController::class, 'add_phone']);
Route::get('/edit_form/{id}', [crudController::class, 'edit_form'])->name('edit.product');
Route::post('/edit_process', [crudController::class, 'edit_process']);
Route::get('/search', [crudController::class, 'searchContent'])->name('search');
Route::get('/delete_phone/{id}', [crudController::class, 'delete_phone']);
