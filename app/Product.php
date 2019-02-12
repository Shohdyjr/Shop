<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    public function category(){

        return $this->belongsTo('App\Category','cat_id');

    }

    public function images(){

        return $this->hasMany('App\Image');

    }

    public function comments(){

        return $this->hasMany('App\Comment','pro_id');

    }
}
