<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use app\Product;
class Attributeitem extends Model
{
    protected $table="attributeitems";

    public $timestamps=false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
