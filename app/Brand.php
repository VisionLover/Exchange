<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Brand extends Model
{
    protected $table="brands";

    public $timestamps=false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
