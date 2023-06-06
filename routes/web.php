<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

use App\Http\Controllers\SubCategory;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products',ProductController::class)->names('products');

Route::resource('/categorys',CategoryController::class)->names('categorys');

Route::resource('/Subcategory',SubCategoryController::class)->names('sub');


Route::get('contenido',[App\Http\Controllers\HomeController::class, 'contenido']);
 