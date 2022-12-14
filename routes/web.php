<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcategoryController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', function () {
    return view('product');
});
// Route::get('/shop', function () {
//     return view('shop');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('product', [PcategoryController::class, 'storecat'])->name('storecat');
Route::get('product', [PcategoryController::class, 'index']);
Route::post('/productstore', [PcategoryController::class, 'storeprod'])->name('storeprod');
