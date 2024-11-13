<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;


Route::get('/', [PagesController::class, 'index'])->name('pages.index');
