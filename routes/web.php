<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LohusaFormController;
use App\Http\Controllers\BebekFormController;



Route::get('/lohusa', [LohusaFormController::class, 'index'])->name('lohusa.index');
Route::get('/lohusa/create', [LohusaFormController::class, 'create'])->name('lohusa.create');
Route::post('/lohusa', [LohusaFormController::class, 'store'])->name('lohusa.store');
Route::get('/lohusa/{lohusaForm}', [LohusaFormController::class, 'show'])->name('lohusa.show');

Route::prefix('bebek')->name('bebek.')->group(function () {
    Route::get('/', [BebekFormController::class, 'index'])->name('index');
    Route::get('/create', [BebekFormController::class, 'create'])->name('create');
    Route::post('/', [BebekFormController::class, 'store'])->name('store');
    Route::get('/{bebekForm}', [BebekFormController::class, 'show'])->name('show');
});

Route::get('/lohusa/{id}/pdf', [LohusaFormController::class, 'exportPdf'])->name('lohusa.pdf');

Route::get('/bebek/{id}/pdf', [BebekFormController::class, 'exportPdf'])->name('bebek.pdf');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/lohusa/create', [LohusaFormController::class, 'create'])->name('lohusa.create');
Route::post('/lohusa', [LohusaFormController::class, 'store'])->name('lohusa.store');

Route::get('/bebek/create', [BebekFormController::class, 'create'])->name('bebek.create');
Route::post('/bebek', [BebekFormController::class, 'store'])->name('bebek.store');

Route::get('/', [LohusaFormController::class, 'sonKayitlar'])->name('home');


Route::get('/lohusa/create', [LohusaFormController::class, 'create'])->name('lohusa.create');
Route::post('/lohusa', [LohusaFormController::class, 'store'])->name('lohusa.store');


Route::delete('/lohusa/{id}', [LohusaFormController::class, 'destroy'])->name('lohusa.destroy');

