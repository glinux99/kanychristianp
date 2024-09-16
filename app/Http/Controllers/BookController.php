<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::with('user')->get();
        $books = Book::all();
        $categories = Categorie::all();
        return view('admin.books', ['authors'=>$authors, 'books'=>$books, 'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $book = Book::create($request->all());


        if ($request->file()) {
            // foreach ($request->file() as $index => $image) {
                $image= $request->file('avatar');
                $image2= $request->file('document');

           if($image) {
            $fileName =  str::uuid().'.png';
                $path = $image->storeAs(
                    'images/',
                    $fileName,
                    'public'
                );
                // array_push($img, $fileName);
                $book->update(['avatar'=>'/storage/images/'.$fileName]);}
            // }

           if($image2){
            $fileName =  str::uuid().'.pdf';
            $path = $image2->storeAs(
                'images/books/',
                $fileName,
                'public'
            );
            $book->update(['file'=>'/storage/images/books/'.$fileName]);
            // dd($fileName);
           }
           // array_push($img, $fileName);
       // }

        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
