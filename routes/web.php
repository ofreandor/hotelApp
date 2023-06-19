<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
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
    return view('home');
});

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('admin/roomtype', [RoomtypeController::class, 'index'])->name('view_all.roomtype');

Route::get('admin/create/roomtype', [RoomtypeController::class, 'create'])->name('create.roomtype');
Route::post('admin/store/roomtype', [RoomtypeController::class, 'store'])->name('store.roomtype');

Route::get('admin/show/roomtype/{id}', [RoomtypeController::class, 'show'])->name('show.roomtype');

Route::get('admin/edit/roomtype/{id}', [RoomtypeController::class, 'edit'])->name('edit.roomtype');

Route::post('admin/update/roomtype/{id}', [RoomtypeController::class, 'update'])->name('update.roomtype');

Route::get('admin/delete/roomtype/{id}', [RoomtypeController::class, 'destroy'])->name('delete.roomtype');



Route::get('admin/room', [RoomController::class, 'index'])->name('view_all.room');

Route::get('admin/create/room', [RoomController::class, 'create'])->name('create.room');
Route::post('admin/store/room', [RoomController::class, 'store'])->name('store.room');

Route::get('admin/show/room/{id}', [RoomController::class, 'show'])->name('show.room');

Route::get('admin/edit/room/{id}', [RoomController::class, 'edit'])->name('edit.room');

Route::post('admin/update/room/{id}', [RoomController::class, 'update'])->name('update.room');

Route::get('admin/delete/room/{id}', [RoomController::class, 'destroy'])->name('delete.room');






Route::get('admin/customer', [CustomerController::class, 'index'])->name('view_all.customer');

Route::get('admin/create/customer', [CustomerController::class, 'create'])->name('create.customer');
Route::post('admin/store/customer', [CustomerController::class, 'store'])->name('store.customer');

Route::get('admin/show/customer/{id}', [CustomerController::class, 'show'])->name('show.customer');

Route::get('admin/edit/customer/{id}', [CustomerController::class, 'edit'])->name('edit.customer');

Route::post('admin/update/customer/{id}', [CustomerController::class, 'update'])->name('update.customer');

Route::get('admin/delete/customer/{id}', [CustomerController::class, 'destroy'])->name('delete.customer');