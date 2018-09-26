<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    public $table = "permissions";

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'guard_name'
    ];
}
