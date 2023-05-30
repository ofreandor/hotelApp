<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
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

Route::get('admin/roomtype', [RoomtypeController::class, 'index']);

Route::get('admin/create/roomtype', [RoomtypeController::class, 'create'])->name('create.roomtype');
Route::post('admin/store/roomtype', [RoomtypeController::class, 'store'])->name('store.roomtype');

Route::get('admin/show/roomtype/{id}', [RoomtypeController::class, 'show'])->name('show.roomtype');



