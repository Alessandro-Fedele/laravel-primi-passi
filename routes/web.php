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

Route::get("/", function () {
    return view("homepage");
});
// ____________________________________________________________________
// NIKE ________________________________________
Route::get("/nike", function () {
    $dataNike = [
        'shoes' => array(
            [
                'price' => '129.00',
                'path' =>  'images/nike1.jpg',
                'size' => '43 - 44 - 46'
            ],
            [
                'price' => '119.00',
                'path' =>  'images/nike2.jpg',
                'size' => '45 - 46'
            ],
            [
                'price' => '109.99',
                'path' =>  'images/nike3.jpg',
                'size' => '42 - 43 - 44 - 45'
            ],
        )
    ];
    return view("nike", $dataNike);
})->name("nike");
// ____________________________________________________________________
// ADIDAS ________________________________________
Route::get("/adidas", function () {
    $dataAdidas = [
        'shoes' => array(
            [
                'price' => '129.00',
                'path' =>  'images/adidas1.jpg',
                'size' => '43 - 44 - 46'
            ],
            [
                'price' => '100.00',
                'path' =>  'images/adidas2.jpg',
                'size' => '45 - 46'
            ],
            [
                'price' => '109.99',
                'path' =>  'images/adidas3.jpg',
                'size' => '42 - 43 - 44 - 45'
            ],
        )
    ];
    return view("adidas", $dataAdidas);
})->name("adidas");
// ____________________________________________________________________
// VANS ________________________________________
Route::get("/vans", function () {
    $dataVans = [
        'shoes' => array(
            [
                'price' => '129.00',
                'path' =>  'images/vans1.jpg',
                'size' => '43 - 44 - 46'
            ],
            [
                'price' => '79.00',
                'path' =>  'images/vans2.jpg',
                'size' => '42 - 45 - 46'
            ],
            [
                'price' => '99.99',
                'path' =>  'images/vans3.jpg',
                'size' => '43 - 44 - 45'
            ],
        )
    ];
    return view("vans", $dataVans);
})->name("vans");
