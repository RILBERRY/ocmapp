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
    $title = "thishisdhsdjfh sda";
    $data = [];
    $items = collect([
        'a' => 'DB-01',
        'b' => 'DB-022',
        'c' => 'DB-02',
        'd' => 'DB-03',
        'e' => 'DB-04',
        'f' => 'DB-05',
        'g' => 'DB-06',
        'h' => 'DB-07',
        'i' => 'DB-08',
    ]);

    return view('welcome', ['items'=>$items, 'title'=>$title ]);
});
