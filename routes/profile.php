<?php

use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get("/orgcreate", [ProfileController::class, 'createOrganisation'])->name("organisation.create");
Route::post("/orgcreate", [ProfileController::class, 'createOrganisationPost'])->name("post.organisation.create");
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
