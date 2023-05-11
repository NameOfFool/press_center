<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


App::setLocale('ru');
Route::get('/',[PageController::class,'index'])->name("index");
Route::get('/news', [PageController::class, 'main'])->name("main");
Route::get('/news/{id}', [PageController::class, 'news'])->name('news');


Route::middleware('auth')->group(function () {
    require __DIR__.'/profile.php';
    Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('/upload', [UploadController::class, 'cropImage'])->name('crop');
    Route::get('/documents',[DocumentController::class,'index'])->name("documents");
    Route::get('/documents/{id}',[DocumentController::class,"fillForm"])->name("document.download");
    require __DIR__.'/grammary.php';
    Route::middleware('admin')->group(function () {
        require __DIR__.'/admin.php';
    });
});

require __DIR__ . '/auth.php';
