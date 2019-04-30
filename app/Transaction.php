<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

}
