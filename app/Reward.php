<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reward extends Model
{
    public $timestamps = false;

    public function users(){
        return $this->hasMany(User::class);
    }

    
}
