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


}
