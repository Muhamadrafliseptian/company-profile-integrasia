<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function() {
    Route::get("/dashboard", [AppController::class, "dashboard"]);
});
