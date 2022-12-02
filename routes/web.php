<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "thePage";
});

Route::middleware('name_atr')->get('/n_page', function(){
    return 'success';
});

Route::get('/error', function () {
    return "error";
});
