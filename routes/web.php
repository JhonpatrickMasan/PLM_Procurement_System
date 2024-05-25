<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProcurementController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/procurement-monitoring', [ProcurementController::class, 'index'])->name('procurement.monitoring');
Route::get('/procurement/create', [ProcurementController::class, 'create'])->name('procurement.create');
Route::post('/procurement', [ProcurementController::class, 'store'])->name('procurement.store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'showChangePasswordForm'])->name('profile.change-password');
    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/supplier/details', [SupplierController::class, 'showDetails'])->name('supplier.details');
Route::resource('suppliers', SupplierController::class);
require __DIR__.'/auth.php';
