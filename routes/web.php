<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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
/*
Route::get('/', function(){    
    return view('home');
});

Route::get('/user/{id}/{name}', function($id,$name){
    return 'This is user '.$id;
    return 'Your username is '.$name;
});
*/
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/service', [PagesController::class, 'service']);
Route::get('/form', [PagesController::class, 'form']);
//Route::post('/form', [PagesController::class, 'formdata']);
Route::get('/sign_in', [PagesController::class, 'sign_in']);
Route::resource('posts', PostsController::class);
//Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/