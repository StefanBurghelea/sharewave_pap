<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use App\Reward;
use App\Post;
use App\User;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function reward(){

        return $this->belongsTo(Reward::class);

    }

}
