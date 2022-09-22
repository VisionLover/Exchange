<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Image extends Model
{
    protected $table="images";

    public $timestamps=false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
