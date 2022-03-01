<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin.index');
// });
Route::get('/', [IndexController::class, 'index']);
// Route::get('/', [IndexController::class, 'admin']);
Route::get('users', [UserController::class, 'index']);
Route::get('editUser/{id}', [UserController::class, 'edit']);
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/add', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/add', [UserController::class, 'store'])->name('admin.users.store');
Route::get('deleteUser/{id}', [UserController::class, 'destroy']);
Route::get('categories',[CategoryController::class,'index']);
Route::get('editCategory/{id}',[CategoryController::class,'edit']);
Route::put('editCategory/{id}',[CategoryController::class,'update']);
Route::get('deleteCategory/{id}', [CategoryController::class, 'destroy']);
Route::get('servicess', [ServiceController::class, 'index']);

Route::get('/admin/catergories/add', [CategoryController::class, 'create']);
Route::post('/admin/catergories/store', [CategoryController::class, 'store']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('editService/{id}',[ServiceController::class,'edit']);
Route::put('editService1/{id}',[ServiceController::class,'update']);
Route::get('/admin/services/add', [ServiceController::class, 'create']);
Route::post('/admin/services/store', [ServiceController::class, 'store']);
Route::get('deleteService/{id}', [ServiceController::class, 'destroy']);
