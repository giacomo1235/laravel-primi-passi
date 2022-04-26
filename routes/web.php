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

Route::get('/contatti', function() {
    $parametri = [
        'contatti' => [
            [
                'name'      => 'Alarico',
                'età'       => 30,
                'numero'    => 3458797618
            ],
            [
                'name'      => 'Tamerlano',
                'età'       => 60,
                'numero'    => 6789106187
            ],
            [
                'name'      => 'Alboino',
                'età'       => 90,
                'numero'    => 2341234567
            ]
        ]
    ];
    return view('contacts', $parametri);
})->name('contacts');

Route::get('/chisiamo', function() {
    return view('chisiamo');
})->name('chisiamo');

Route::get('/dadoveveniamo', function() {
    return view('dadoveveniamo');
})->name('dadoveveniamo');

Route::get('/headermenu', function() {
    return view('headermenu');
})->name('headermenu');
