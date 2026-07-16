<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [HomeController::class, 'services'])->name('public.services');
Route::get('/galeri', [HomeController::class, 'gallery'])->name('public.gallery');
Route::get('/kontak', [HomeController::class, 'contact'])->name('public.contact');
Route::post('/kontak/kirim', [ContactController::class, 'send'])->name('contact.send');
Route::get('/kontak/sukses', function () {
    return view('public.maintenance');
})->name('contact.success');

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok'
    ]);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
