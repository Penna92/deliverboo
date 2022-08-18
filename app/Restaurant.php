<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function types()
    {
        return $this->belongsToMany('App\Type');
    }

    public function user()
    {
        return $this->belongsTo("App\User", "user_id");
    }
}
