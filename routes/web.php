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
    $json = file_get_contents(resource_path("data/foodie-rev.json"));
    $data = json_decode($json);
    dump($data);
    return view('index', [
        'menus' => $data
    ]);
});
