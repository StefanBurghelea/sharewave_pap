<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Vote;
use App\Location;
use App\User;


class Post extends Model
{
    protected $guarded = [];   

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function votes(){
        return $this->hasMany(Vote::class);
    }
        
    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function user(){
        return $this->belongsTo(Location::class);
    }
}
