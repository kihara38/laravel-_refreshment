<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "nelki", "skill" => 78, "id" => "1"],
        ["name" => "prof", "skill" => 56, "id" => "2"],
    ];
    return view('ninjas.index', ['greeting' => 'hello', 'ninjas' => $ninjas]);
});
Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    $ninjas = [
        ["name" => "nelki", "skill" => 78, "id" => "1"],
        ["name" => "prof", "skill" => 86, "id" => "2"]
    ];
    return view('ninjas.show', ['id' => $id,]);
});
