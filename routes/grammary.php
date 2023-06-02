<?php

use App\Http\Controllers\GrammaryController;

Route::get("/grammary",[GrammaryController::class,"index"])->name("grammary");
Route::get("/grammary/lesson/{id}",[GrammaryController::class,"lesson"])->name("grammary.lesson");
Route::any("/grammary/video/{name}",[GrammaryController::class,"getVideo"])->name("grammary.video");