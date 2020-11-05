<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $table = "authors";
    
    public function info() {

        return $this->hasOne('App\AuthorsInfo');
    }

    public function comics() {
        return $this->hasMany('App\Comic');
    }
}
