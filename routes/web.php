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

Route::get('/prodotti', function () {
    $pasta = config("pasta");

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($pasta as $item) {
        switch($item["tipo"]) {
            case 'corta':
                $corte[] = $item;
                break;
            case 'lunga':
                $lunghe[] = $item;
                break;
            case 'cortissima':
                $cortissime[] = $item;
                break;

        }
    }

    // dump($lunghe, $corte, $cortissime);

    return view('prodotti',
        [
            "lunghe" => $lunghe,
            "corte" => $corte,
            "cortissime" => $cortissime
        ]
    );
});

Route::get('/', function () { 
    return view('home');
});

Route::get('/le-ultime-novita', function () { 
    return view('news');
});
