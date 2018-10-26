<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // table
    protected $fillable = [
        'name',
        'email',
        'password'

    ];

}
