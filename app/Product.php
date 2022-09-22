<?php

namespace App;

use App\Brand;
use Illuminate\Database\Eloquent\Model;
use App\Attribute;
use App\Attributeitem;
use App\Image;
use App\Category;
use App\Color;
use App\Comment;
use App\User;

class Product extends Model
{

    protected $table="products";

    public function attributes(){
        return $this->belongsToMany(Attribute::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function attributitems(){
        return $this->belongsToMany(Attributeitem::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    public function categorys()
    {
        return $this->hasOne(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
