<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EventController::class,'index']);

Route::get('/events/createEvent', [EventController::class, 'createEvent']);

