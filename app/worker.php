<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    protected $fillable = ['name','email','password'];

    public function report()
    {
        return $this->hasMany('App\report');
    }
}
