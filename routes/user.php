<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', function () {
    return view('app');
});


Route::group(['middleware' => ['guest']], function () {
    Auth::routes(['logout' => false]);
});

Route::group(['middleware' => ['auth:user']], function (Router $router) {
    $router->any('logout', 'Auth\LoginController@logout')->name('logout');

});
