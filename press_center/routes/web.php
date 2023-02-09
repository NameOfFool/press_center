<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
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
App::setLocale('ru');
Route::get('/', [PageController::class, 'index'])->name("index");
Route::get('/news', [PageController::class, 'news'])->name('news');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('/upload',[UploadController::class,'cropImage'])->name('crop');
});
Route::middleware('admin','auth')->group(function (){
   Route::get('admin/',[AdminController::class,'categories'])->name('admin');
   Route::get("admin/category/create",[AdminController::class,'createCategory'])->name('category.create');
   Route::post('admin/category/create',[AdminController::class,'postCategory'])->name('new-category');
});
require __DIR__.'/auth.php';
