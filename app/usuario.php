<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class usuario extends Eloquent
{
    protected $connection='mongodb';
    protected $collection='users';
    protected $fillable =[
        '_id','name', 'email','password', 'updated_at', 'created_at',
    ];
}
