<?php

namespace App\Http\Controllers;

use App\Models\SiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comming= SiteConfig::all();
        // dd($comming);
        return view('admin.comming', data: ['Comming'=>$comming]);
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
        $request['pub']= $request['due_date'];
        $book = SiteConfig::create($request->all());
        if ($request->file()) {
            // foreach ($request->file() as $index => $image) {
                $image= $request->file('avatar');

           if($image) {

            $fileName =  Str::uuid().'.png';
                $path = $image->storeAs(
                    'images/',
                    $fileName,
                    'public'
                );
                // array_push($img, $fileName);
                $book->update(['avatar'=>'/storage/images/'.$fileName]);}
            // }
            // dd(123);
        }
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteConfig $siteConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteConfig $siteConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteConfig $siteConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteConfig $siteConfig)
    {
        //
    }
}
