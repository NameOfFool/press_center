<?php

use App\Http\Controllers\GrammaryController;

Route::get("/grammary",[GrammaryController::class,"index"])->name("grammary");
Route::get("/grammary/lesson/{id}",[GrammaryController::class,"lesson"])->name("grammary.lesson");
Route::any("/grammary/video/{name}",[GrammaryController::class,"getVideo"])->name("grammary.video");
Route::get("/grammary/lesson/{id}/test",[GrammaryController::class,"test"])->name("grammary.test");
Route::post("/grammary/lesson/test/send",[GrammaryController::class,'sendAnswers'])->name("grammary.post");