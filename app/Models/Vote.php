<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vote extends Model
{
    public static function updateOrCreate(array $attributes, array $values = [])
    {
        $instance = static::firstOrNew($attributes);
        $instance->fill($values)->save();

        return $instance;
    }




        //relationship to user
    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }


    // relationship to post
    public function post()
    {
        return $this->belongsTo('\App\Models\Posts', 'post_id');
    }
}
