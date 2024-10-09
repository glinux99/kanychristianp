<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\SiteConfig;
use App\Models\Visitor;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        Visitor::enregistrerVisite();
        $vistors = Visitor::distinct('ip')->count();
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
            $download= Visitor::where('download', 1)->count();
            return view('welcome', ['books'=>$books, 'visitors'=>$vistors, 'blogs'=>$blogs, 'download'=>$download]);
        }
        } catch (\Throwable $th) {
            //throw $th;
            $download= Visitor::where('download', 1)->count();
            return view('welcome', ['books'=>$books, 'visitors'=>$vistors,'download'=>$download]);
        }


    }
    public function donwloads($id){
        // return response()->json(['message'=>'Merci pour le telechargement'], 201);
        $book = Book::find($id);
        $ip =request()->ip();
        $visitor = Visitor::create(
            ['ip'=>$ip,'download'=>true, 'book_id'=>$id]
        );
        $visitor->update(['book_id'=>$book->id, 'download'=>true]);
        return response()->json(['message'=>'Merci pour le telechargement'], 200);

    }
    public function blogs(){
        $blogs = Blog::all();
        return view('blog', ['blogs'=>$blogs]);
    }
    public function books(){
        $books = Book::all();
        return view('books', ['books'=>$books]);
    }
    public function book_better(){
        $books = Book::with('better')
            ->select('book_id', DB::raw('count(*) as oc'))
            ->groupBy('book_id')
            ->orderByDesc('oc')
            ->get();
        return view('books', ['books'=>$books]);
    }
    public function book_new(){
        $start_m = Carbon::now()->startOfMonth();
        $end_m = Carbon::now()->endOfMonth();
        // dd($end_m);
        $books = Book::whereBetween('due_date', [$start_m->format('d-m-Y') ,  $end_m->format('d-m-Y')])->get();
        // dd($books);
        return view('books', ['books'=>$books]);
    }
}
