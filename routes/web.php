<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/comming', function () {
    return view('comming');
});
Route::get('/blog-detail', function () {
    return view('blog_detail');
});
Route::get('/blogs', function () {
    return view('blog');
});
Route::get('/books', function () {
    return view('books');
});
Route::get('/books-new', function () {
    return view('blog_detail');
});
Route::get('/books-better', function () {
    return view('blog_detail');
});
Route::get('artisan/{query}', function ($query) {
    Artisan::call($query);
    $output = Artisan::output();
    return $output;
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
