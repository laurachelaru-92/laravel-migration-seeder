<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";
    
    protected $fillable = [
        "name"
    ];

    public function comics() {
        return $this->belongsToMany('App\Comic');
    }
}
