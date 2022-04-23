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

/*Route::get('salut', function () {
    return 'salut ca va';
});
Route::get('salut/{name}-{id}', function ($slug,$id) {
    return "Slug:$slug ,ID:$id";
})->where('name','[a-z0-9/-]+')->where('id','[0-9]+');
Route::get('/' ,'WelcomeController@index');
Route::get('/' ,'HomeController@index');*/
Route::get('/', function () {
    return view('pages/home');
})->name('kolie');
Route::get('/about_us',function (){
    return view('pages/about');
})->name('about');
Route::get('/help',function (){
    return view('pages/help');
})->name('help');
