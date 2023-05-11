<?php

use App\Http\Controllers\GrammaryController;

Route::get("/grammary",[GrammaryController::class,"index"])->name("grammary");
