<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get("/contact", [ContactController::class, 'index']);

Route::post("/send-message", [ContactController::class, 'store']);
