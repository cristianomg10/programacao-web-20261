<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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
});

Route::get('/produtos', [ProdutosController::class, 'listar']);
Route::get('/produtos/novo', 
    [ProdutosController::class, 'novo'])
    ->name('prod.novo');
Route::post('/produtos/novo/{id?}',
    [ProdutosController::class, 'salvar'])
    ->name('prod.salvar');
Route::get('/produtos/edit/{id}', 
    [ProdutosController::class, 'edit'])
    ->name('prod.edit');
Route::get('/produtos/delete/{id}', [ProdutosController::class, 'delete'])->name('prod.delete');

require __DIR__.'/auth.php';
