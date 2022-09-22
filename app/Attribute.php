<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Attributegroup;

class Attribute extends Model
{
    protected $table="attributes";

    public $timestamps=false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function attributegroups(){
        return $this->hasMany(Attributegroup::class);
    }
}
