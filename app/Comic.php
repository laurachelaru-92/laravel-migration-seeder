<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Comic extends Model
{
    protected $table = "comics";
    
    public function author() {
        return $this->belongsTo('App\Author');
    }

    public function genres() {
        return $this->hasMany('App\Genre');
    }

    protected $guarded = [];
}
