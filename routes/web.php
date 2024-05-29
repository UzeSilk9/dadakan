<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Prakerja\PrakerjaController;

Route::get('/', [PrakerjaController::class, 'index'])->name('/');

Route::get('prakerja',[PrakerController::class,'index'])->name('prakerja');
Route::get('tambah',[PrakerjaController::class,'tambah'])->name('tambah');
Route::post('tambah.save',[PrakerjaController::class, 'save'])->name('save');