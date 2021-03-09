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

    $data = [
        'nome' => 'Valerio',
        'cognome' => 'De Vivo',

        'menu' => ['home', 'chi-siamo', 'portfolio']
    ];
    return view('home', $data);
});

Route::get('/chi-siamo', function () {

    $data = [
        'text' => ['team1', 'team2', 'team3'],
        'img' => 'https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331256_1280.png'
    ];
    return view('chi-siamo', $data);
});

Route::get('/portfolio', function () {

    $data = [
        'img' => [
            'https://cdn.pixabay.com/photo/2019/07/08/04/23/traveling-4323759_1280.png', 
            'https://cdn.pixabay.com/photo/2019/06/13/06/02/travel-4270800_1280.png',
            'https://cdn.pixabay.com/photo/2020/02/05/15/40/natural-4821550_1280.png',
            'https://cdn.pixabay.com/photo/2021/02/07/23/04/mountains-5993080_1280.png'
        ]
    ];
    return view('portfolio', $data);
});
