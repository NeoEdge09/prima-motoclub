<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OuterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/our-client', function () {
    return view('client');
});

Route::get('/product', function () {
    return view('product');
});




Auth::routes();

Route::controller(OuterController::class)->group(function () {
    Route::get('/article-list', 'article_page')->name('article');
    Route::get('/article-detail/{id}', 'show_article')->name('article.detail');
    Route::get('/gallery', 'show_galleryphoto_article')->name('gallery');
});


Route::get('/home', [HomeController::class, 'index'])->name('home`');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('articles', ArticleController::class)->names('articles');
