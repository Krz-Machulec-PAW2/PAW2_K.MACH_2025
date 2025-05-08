<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Programowanie', function () {
    return view('Programowanie/programowanie');
});

Route::get('/Programowanie/PHP', function () {
    return view('Programowanie.progr_php');
});

Route::get('/Programowanie/JAVA', function () {
    return view('Programowanie.progr_java');
});

Route::get('/Programowanie/C++', function () {
    return view('Programowanie.progr_C++');
});



Route::get('/Gotowanie/Meat', function () {
    return view('Gotowanie.meat');
});

Route::get('/Gotowanie/Fish', function () {
    return view('Gotowanie.fish');
});

Route::get('/Gotowanie/Veg&Starch', function () {
    return view('Gotowanie.veg&starch');
});

Route::get('/Gotowanie/Baking', function () {
    return view('Gotowanie.baking');
});

Route::get('/Gotowanie/Meals', function () {
    return view('Gotowanie.meals');
});



Route::get('/Rozrywka/Music', function () {
    return view('Rozrywka.music');
});

Route::get('/Rozrywka/Games', function () {
    return view('Rozrywka.games');
});

Route::get('/Rozrywka/Clips', function () {
    return view('Rozrywka.clips');
});

Route::get('/Rozrywka/Videos', function () {
    return view('Rozrywka.videos');
});



Route::get('/Lista', function () {
    return view('lista');
});
