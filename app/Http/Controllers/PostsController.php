<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $posts = \App\Models\Post::all();
            // $data = [];
            //paginate
            $posts = \App\Models\Post::paginate(3);
            $data['posts'] = $posts;
            return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
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
    public function store(Request $request)
    {

            $this->validate($request, \App\Models\Post::$rules);
             $post = new \App\Models\Post();
            $post->title = $request->title;
            $post->url = $request->url;
            $post->content = $request->content;
            $post->created_by = 1;
            $post->save();
            $request->session()->flash("sucessMessage", "Your post was saved sucessfully");
            return \Redirect::action('PostsController@index');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Models\Post::find($id);
        $data['post'] = $post;
         return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = \App\Models\Post::find($id);
        $data['post'] = $post;
         return view('posts.edit', $data);
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

        $this->validate($request, \App\Models\Post::$rules);
        $post =  \App\Models\Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by =2;
         $post->save();
         $request->session()->flash("sucessMessage", "Your post was updated sucessfully");
        return \Redirect::action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = \App\Models\Post::find($id);
		$post->delete();
         $request->session()->flash("sucessMessage", "Your post was deleted sucessfully");
		return \Redirect::action('PostsController@index');
    }
}
