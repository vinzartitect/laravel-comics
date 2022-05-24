<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', function () {
    $comics = config('comics');
    $data = ['series' => $comics];

    return view('comics', $data);
});


Route::get('comics/detail/{id?}', function ($id = null) {

    $comics = config('comics');
    if (!$id || !is_numeric($id)){
        $data = ['series' => $comics];
        return view('comics', $data);
    }

    $data = ['serie' => $comics[$id-1]];

    // dump($data);

    return view('detail', $data);
});

