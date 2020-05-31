<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    protected $fillable = ['name','email','password'];
}
