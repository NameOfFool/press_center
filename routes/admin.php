<?php

use App\Http\Controllers\AdminController;

Route::get('admin/', [AdminController::class, 'index'])->name('admin');
Route::get("admin/category",[AdminController::class,'categories'])->name("category");
Route::get("admin/category/news/edit/{id}",[AdminController::class,'editNews'])->name("news.edit");
Route::get("admin/documents/edit/{id}",[AdminController::class,'editDoc'])->name("document.edit");
Route::get("admin/category/create", [AdminController::class, 'createCategory'])->name('category.create');
Route::get('admin/category/news/create/{id}', [AdminController::class, 'createNews'])->name("news.create");
Route::post('admin/category/create', [AdminController::class, 'postCategory'])->name('new-category');
Route::get('admin/category/{id}', [AdminController::class, 'getNews'])->name("admin.news");
Route::post("admin/category/news/create", [AdminController::class, 'postNews'])->name('news.create-post');
Route::get("admin/documents",[AdminController::class,"tags"])->name("tags");
Route::get("admin/documents/create",[AdminController::class,"createDoc"])->name("document.create");
Route::post("admin/documents/load_fields",[AdminController::class,"loadFields"])->name("document.create.load_fields");
Route::post("admin/documents/field",[AdminController::class,'createNewAutoField'])->name("document.field");
Route::post("admin/documents/create",[AdminController::class,'postDoc'])->name("document.create.post");
