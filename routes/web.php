<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SiteConfigController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});
Route::fallback(function () {
    return redirect()->to("/");
});
Route::get('/comming', function () {
    return view('comming');
});
Route::get('/blog-detail', function () {
    return view('blog_detail');
});
Route::get('/blogs', [SiteController::class, 'blogs']);
Route::get('/download/{id}', [SiteController::class, 'donwloads']);
Route::get('/books', [SiteController::class, 'books']);
Route::get('/books-news', [SiteController::class, 'book_new']);
Route::get('/books-better', [SiteController::class, 'book_better']);
Route::get('artisan/{query}', function ($query) {
    Artisan::call($query);
    $output = Artisan::output();
    return $output;
});


Route::group(['middleware' => 'auth'], function(){
    Route::resources([
        'admin/blogs'=>BlogController::class,
        'admin/books'=>BookController::class,
        'admin/visitors'=>VisitorController::class,
        'admin/categories'=>CategorieController::class,
        'admin/authors'=>AuthorController::class,
        'admin/commings'=>SiteConfigController ::class
    ]);
    Route::get('/categorie/{id}', [CategorieController::class, 'destroy']);
    Route::get('/author/{id}', [AuthorController::class, 'destroy']);
});
Route::get('admin/home', [AdminController::class, 'index'])->name('admin.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
