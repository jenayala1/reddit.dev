<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;
use Auth;


class PostsController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth',['except'=>['index', 'show']]);
    }
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
            $posts = Post::paginate(3);
            $data['posts'] = $posts;
            Log::info('Page visited by a user');
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

            $this->validate($request, Post::$rules);
             $post = new Post();
            $post->title = $request->title;
            $post->url = $request->url;
            $post->content = $request->content;
            $post->created_by = Auth::id();
            $post->save();
            $request->session()->flash("sucessMessage", "Your post was saved sucessfully");
            Log::info($post);
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
        $post = Post::findOrFail($id);

        $data['post'] = $post;
        Log::info('Blogs viewed');
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
        $post = Post::find($id);
        if (!$post) {
            abort(404);
            Log::error ("Invalid Page");
        }
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

        $this->validate($request, Post::$rules);
        $post =  Post::find($id);
        if (!$post) {
            abort(404);
            Log::error ("Invalid Page");
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by =Auth::id();
         $post->save();
         $request->session()->flash("sucessMessage", "Your post was updated sucessfully");
         Log::info('Post updated');
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
        $post = Post::find($id);
        if (!$post) {
            abort(404);
            Log::error ("Invalid Page");
        }
		$post->delete();
         $request->session()->flash("sucessMessage", "Your post was deleted sucessfully");

        return \Redirect::action('PostsController@index');
    }
}
