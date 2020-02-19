<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
public function program(){
    return $this->hasMany('App\Program','category_id');
}
}
