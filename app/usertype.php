<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    public function users()
    {
        return $this->hasMany('App\User');

    }
    public function parent()
    {
        return $this->belongsto('App\usertype');
    }
    public function childs()
    {
        return $this->hasMany('App\usertype','parent_id');
    }
}
