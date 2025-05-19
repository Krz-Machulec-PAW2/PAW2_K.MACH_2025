<?php

use Illuminate\Support\Facades\Route;
use App\Models\Users;
use App\Models\Video;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Programowanie', function () {
    return view('Programowanie/ogolne', [
        'videos' => Video::where('ID_VidCat', 4)->get(),
        'cat' => 4
    ]);
});

Route::get('/Programowanie/PHP', function () {
    return view('Programowanie.PHP', [
        'videos' => Video::where('ID_VidCat', 1)->get(),
        'cat' => 1
    ]);
});

Route::get('/Programowanie/JAVA', function () {
    return view('Programowanie.JAVA', [
        'videos' => Video::where('ID_VidCat', 2)->get(),
        'cat' => 2
    ]);
});

Route::get('/Programowanie/C++', function () {
    return view('Programowanie.C++', [
        'videos' => Video::where('ID_VidCat', 3)->get(),
        'cat' => 3
    ]);
});



Route::get('/Gotowanie/Meat', function () {
    return view('Gotowanie.meat', [
        'videos' => Video::where('ID_VidCat', 5)->get(),
        'cat' => 5
    ]);
});

Route::get('/Gotowanie/Fish', function () {
    return view('Gotowanie.fish', [
        'videos' => Video::where('ID_VidCat', 6)->get(),
        'cat' => 6
    ]);
});

Route::get('/Gotowanie/Veg&Starch', function () {
    return view('Gotowanie.veg&starch', [
        'videos' => Video::where('ID_VidCat', 7)->get(),
        'cat' => 7
    ]);
});

Route::get('/Gotowanie/Baking', function () {
    return view('Gotowanie.baking', [
        'videos' => Video::where('ID_VidCat', 8)->get(),
        'cat' => 8
    ]);
});

Route::get('/Gotowanie/Meals', function () {
    return view('Gotowanie.meals', [
        'videos' => Video::where('ID_VidCat', 9)->get(),
        'cat' => 9
    ]);
});



Route::get('/Rozrywka/Music', function () {
    return view('Rozrywka.music', [
        'videos' => Video::where('ID_VidCat', 10)->get(),
        'cat' => 10
    ]);
});

Route::get('/Rozrywka/Games', function () {
    return view('Rozrywka.games', [
        'videos' => Video::where('ID_VidCat', 11)->get(),
        'cat' => 11
    ]);
});

Route::get('/Rozrywka/Clips', function () {
    return view('Rozrywka.clips', [
        'videos' => Video::where('ID_VidCat', 12)->get(),
        'cat' => 12
    ]);
});

Route::get('/Rozrywka/Videos', function () {
    return view('Rozrywka.videos', [
        'videos' => Video::where('ID_VidCat', 13)->get(),
        'cat' => 13
    ]);
});



Route::get('/Lista', function () {
    return view('lista', [
        'users' => Users::with('role')->get()
    ]);
});

Route::post('/video-insert', [VideoController::class, 'insert'])->name('video-insert');
