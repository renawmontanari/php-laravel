<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "<h1>Aula</h1>";
});

Route::get('/quemsomos', function () {
    return View("quemsomos");
});