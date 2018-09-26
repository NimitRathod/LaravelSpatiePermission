<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $guarded = [];
 
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
