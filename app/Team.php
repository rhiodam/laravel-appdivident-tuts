<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function goals()
    {
        return $this->hasManyThrough(Goal::class, User::class);
    }
}
