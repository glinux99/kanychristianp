<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        $books = Book::all();
        return view('welcome', ['books'=>$books]);
    }
    public function blogs(){
        $blogs = Blog::all();
        return view('blog', ['blogs'=>$blogs]);
    }
    public function books(){
        $books = Book::all();
        return view('books', ['books'=>$books]);
    }
}
