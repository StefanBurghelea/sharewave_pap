<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Location extends Model
{
    public $timestamps = false;

    public function posts(){
        return $this->hasMany(Post::class);
    }

}
