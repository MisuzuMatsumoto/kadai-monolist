<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','welcomeController@index');