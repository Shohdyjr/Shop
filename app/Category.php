<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    public function products(){

        return $this->hasMany('App\Product');

    }


    public function childs(){

        return $this->hasMany('App\Category','parent');

    }
}
