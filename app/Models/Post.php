<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;


class Post extends BaseModel
{

    public static $rules = [  // accessible to multiple files using the model
        'title' => 'required|max:100',
        'content' => 'required',
        'url'   => 'required|url'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User', 'created_by');
    }

    public function votes()
    {
    return $this->hasMany('App\Models\Vote', 'vote_id');
    }

    public static function searchContent($q)
    {
        $posts = Post::where('content', 'like', '%' . $q . '%')->get();
        return $posts;
    }

    public static function search($search)
   {
       $posts = Post::with('user')
 		    ->where('title', 'like', "%$search%")
	        ->orwhere('content', 'like', "%$search%")
	        ->orwhere('url', 'like', "%$search%")

	        ->orWhereHas('user', function($q) use ($search) {
	            $q->where('name', 'like', "%$search%");
	        })->get();

       return $posts;
   }

}
