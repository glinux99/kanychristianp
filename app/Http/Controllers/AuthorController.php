<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors =Author::with('user')->get();
        // return ;
        return view('admin.author', ['authors'=>$authors]);
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
        if($request->id!=null){
            return $this->update($request, Author::find($request->id));
        }else{
            $request['password'] = "daniel@243@linux99!!$$#()%$&#)@(*)#@!*#";
            $user = User ::create($request->all());
            Author::create(['user_id'=>$user->id]);
        }

        // return Author::al;
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        // dd(1122);
        User::find($author->user_id)->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $author)
    {
        Author::find($author)->delete();
        return $this->index();
    }
}
