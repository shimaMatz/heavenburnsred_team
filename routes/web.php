<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StyleController;

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

Route::get('dashboard', [AdminController::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

//一般ユーザー
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update');

    Route::get('/admin/characters', [CharacterController::class, 'index'])->name('characters.index');
    Route::get('/admin/characters/{id}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
    Route::put('/admin/characters/{id}', [CharacterController::class, 'update'])->name('characters.update');

    Route::get('/admin/masters', [MasterController::class, 'index'])->name('masters.index');

    Route::get('/admin/styles', [StyleController::class, 'index'])->name('styles.index');
    Route::get('/admin/styles/create', [StyleController::class, 'create'])->name('styles.create');
    Route::post('/admin/styles', [StyleController::class, 'store'])->name('styles.store');
    Route::get('/admin/styles/{id}/edit', [StyleController::class, 'edit'])->name('styles.edit');
    Route::put('/admin/styles/{id}', [StyleController::class, 'update'])->name('styles.update');
});

require __DIR__ . '/auth.php';
