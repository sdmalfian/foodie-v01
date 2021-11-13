<?php

use App\Models\Menu;
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
    $data = Menu::getMenu();
    return view('index', [
        'menus' => $data
    ]);
});

Route::get('detail/{id}', function($id) {
    $menu = Menu::getMenuDetail($id);
    return view('detail', [
        'menu' => $menu
    ]);
});