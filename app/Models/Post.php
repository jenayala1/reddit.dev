<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static $rules = array(  // accessible to multiple files using the model
        'title' => 'required|max:100',
        'content' => 'required',
        'url'   => 'required|url'
        

    );
}
