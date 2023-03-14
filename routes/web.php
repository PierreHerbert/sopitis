<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/travels', [TravelController::class, 'index'])->name('travels.index');
Route::get('/travels/{travel:slug}', [TravelController::class, 'show'])->name('travels.show');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{ 

    Route::group(['middleware' => ['guest']], function() { // Acces si on est pas connecter

        // Routes Inscription
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        //Routes Connexion
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() { // Acces si on est connecter 

        // Routes Déconnexion
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

});
