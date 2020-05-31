<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StorePostRequest;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->user()){
            $posts =  Post::orderBy('id', 'desc')->simplePaginate(20);
            return view('posts.index', ['posts' => $posts]);
        }
        
        
        abort(401, 'this action is unauthorized');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $post = new Post();
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->pathImg = $name;
            $post->categorie_id = $request->input('categorie_id');
            $post->user_id = $request->input('user_id');
            $post->save();
            return redirect()->route('home')->with('status', 'Hiciste una publiación correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'actualiazr';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
