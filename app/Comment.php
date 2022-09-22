<?php

namespace App;

use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    public $timestamps=true;

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
