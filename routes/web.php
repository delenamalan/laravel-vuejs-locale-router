<?php

use Illuminate\Support\Facades\Route;
use App;

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

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']],
    function () {
        Route::get('/{path?}', function($locale) {
            App::setLocale($locale);
            return view('layouts.app');
        })
        ->where('path', '.*');
    }
);
