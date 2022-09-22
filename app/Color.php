<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table="colors";
    public $timestamps=false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
