<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\HomepageController;
use App\Http\Controllers\admin\AboutpageController;

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

//Admin
Route::get('/login', [LoginController::class, 'index']);
Route::post('login' , [LoginController::class , 'login']);
//Admin
Route::get('dashboard' , [DashboardController::class , 'index']);

Route::get('home' , [HomepageController::class , 'index']);
Route::post('home/edit' , [HomepageController::class , 'edit']);
Route::get('home/edit/{ItemID}' , [HomepageController::class , 'edit']);
Route::post('home/edit/{ItemID}' , [HomepageController::class , 'update']);

Route::get('aboutpage' , [AboutpageController::class , 'index']);

Route::get('products' , [ProductsController::class , 'index']);
Route::get('products/add' , [ProductsController::class , 'add']);
Route::post('products/add' , [ProductsController::class , 'store']);
Route::post('products/edit' , [ProductsController::class , 'edit']);
Route::get('products/edit/{ItemID}', [ProductsController::class, 'edit']);
Route::post('products/edit/{ItemID}', [ProductsController::class, 'update']);
Route::get('products/delete/{ItemID}', [ProductsController::class, 'delete']);

Route::get('homereview' , [HomepageController::class , 'indexreview']);
Route::post('home/editreview' , [HomepageController::class , 'editreview']);
Route::get('home/editreview/{ItemID}' , [HomepageController::class , 'editreview']);
Route::post('home/editreview/{ItemID}' , [HomepageController::class , 'updatereview']);


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']); 
