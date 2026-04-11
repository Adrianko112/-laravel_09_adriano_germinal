<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiziController;

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contacts');

Route::get('/servizi', [ServiziController::class, 'servizi'])->name('services');


Route::get('/servizi/detail/{id}', [ServiziController::class, 'serviziDetail'])->name('servicesDetail');