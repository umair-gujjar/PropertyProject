<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';

    protected $fillable = [
        'loc_id','username','email','password'
    ];
}
