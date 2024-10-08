<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\SiteConfig;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        Visitor::enregistrerVisite();
        $vistors = Visitor::count();
        $books = Book::all();
        try {
            $date = SiteConfig::orderByDesc('id')->first()->pub;
            $avatar = SiteConfig::orderByDesc('id')->first()->avatar;
            $dateAComparer = $date;

        // Conversion de la chaîne en objet Carbon
        $dateComparee = Carbon::createFromFormat('d-M-Y', $dateAComparer);

        // Récupération de la date actuelle
        $dateActuelle = Carbon::now();

        // Comparaison
        if ($dateActuelle->lte($dateComparee)) {
            // dd($date);
            // return view('welcome', ['books'=>$books, 'visitors'=>$vistors]);

            $date = Carbon::createFromFormat('d-M-Y', $date);
           return view('comming', ['avatar'=>$avatar, 'due_date'=>$date]);
        } else {
            // dd($date);
            $blogs= Blog::all();
            return view('welcome', ['books'=>$books, 'visitors'=>$vistors, 'blogs'=>$blogs]);
        }
        } catch (\Throwable $th) {
            //throw $th;
            return view('welcome', ['books'=>$books, 'visitors'=>$vistors]);
        }


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
