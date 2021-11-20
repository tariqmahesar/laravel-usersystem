<?php

//Route::get('/url',[UrlController::class, 'index']);
Route::resource('/url', 'App\Http\Controllers\UrlController');