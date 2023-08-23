<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

	//products
	Route::get('/products', [ProductController::class, 'index'])->name('product');

	Route::get('/checkout/{id}', [ProductController::class, 'checkout'])->name('checkout');

	Route::get('/success', [ProductController::class, 'success'])->name('success');

	Route::get('/cancel', [ProductController::class, 'cancel'])->name('cancel');

	Route::get('/notify', [ProductController::class, 'notify'])->name('notify');
	
});


// ->name es para la ruta en la vista
 // Route::get('/products', [ProductController::class, 'index'])->name('product');

require __DIR__.'/auth.php';
