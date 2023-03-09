<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


App::setLocale('ru');
Route::get('/', [PageController::class, 'index'])->name("index");
Route::get('/news/{id}', [PageController::class, 'news'])->name('news');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('/upload', [UploadController::class, 'cropImage'])->name('crop');
    Route::get('/documents',[DocumentController::class,'index'])->name("documents");
    Route::middleware('admin')->group(function () {
        Route::get('admin/', [AdminController::class, 'categories'])->name('admin');
        Route::get("admin/category/create", [AdminController::class, 'createCategory'])->name('category.create');
        Route::get('admin/category/news/create/{id}', [AdminController::class, 'createNews'])->name("news.create");
        Route::post('admin/category/create', [AdminController::class, 'postCategory'])->name('new-category');
        Route::get('admin/category/{id}', [AdminController::class, 'getNews'])->name("admin.news");
        Route::post("admin/category/news/create", [AdminController::class, 'postNews'])->name('news.create-post');
    });
});

require __DIR__ . '/auth.php';
