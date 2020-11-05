<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class AuthorsInfo extends Model
{
    public $timestamps = false;

    protected $table = "authors_info";

    public function author() {
        return $this->belongsTo('App\Author');
    }
}
