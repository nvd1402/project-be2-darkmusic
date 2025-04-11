<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/admin/homeAdmin', [AdminController::class, 'adminindex']) -> name('admin.homeAdmin');;
Route::get('/admin/songs/add', [AdminController::class, 'addsong']) -> name('admin.songs.add');
Route::get('/admin/songs/list', [AdminController::class, 'listsong']) -> name('admin.songs.list');
