<?php

namespace App\Http\Controllers;

use App\Brand;
use App\User;
use Storage;
use App\Category;
use App\Comment;
use App\Product;
use Illuminate\Http\Request;

class Maincontrollers extends Controller
{

    public function mainpage()
    {
        $category=Category::where('parent_id', '<=' , 0)->get();
        $item=Category::where('parent_id', '>' , 0)->get();
        $products=Category::latest()->join('products as p','p.wanted_id','=','categorys.id')->where('status',1)->get();
        return view('welcome',compact('category','products','item'));
    }

    public function single($pro_id)
    {
        $category=Category::where('parent_id', '<=' , 0)->get();
        $item=Category::where('parent_id', '>' , 0)->get();
        $product=Product::where('id',$pro_id)->get();
        $category_id=$product[0]->category_id;
        $wanted_id=$product[0]->wanted_id;
        $user_id=$product[0]->user_id;
        $phone=User::where('id',$user_id)->get()[0]->phone;
        $category_name = Category::where('id', $category_id)->get();
        $wanted_name = Category::where('id', $wanted_id)->get();
        $products=Category::latest()->join('products as p','p.wanted_id','=','categorys.id')->where([['status',1],['category_id',$category_id]])->get()->except($product[0]->id);
        $color = Product::with('colors')->where('id',$pro_id)->get();
        $image = Product::with(['images'=> function($q) {
            // Query the name field in status table
            $q->where('status', '=', 1); // '=' is optional
        }])->where('id','=',$pro_id)->get();
        $comments = Comment::where('product_id' , $pro_id)->where('parent_id' , 0)->where('status' , 1)->get();
        $answers = Comment::where('product_id' , $pro_id)->where('parent_id' ,'!=', 0)->where('status' , 1)->get();

        foreach($color as $colors) {
            $pcolor= $colors->colors;
        }
        foreach($image as $images) {
            $pimage= $images->images;
        }
        return view('single',compact('pro_id','category','products','item','product','category_name','wanted_name','pcolor','comments','answers','pimage','phone'));
    }

    public function singleproducts($id)
    {
        $category=Category::where('parent_id', '<=' , 0)->get();
        $item=Category::where('parent_id', '>' , 0)->get();
        $products=Category::latest()->join('products as p','p.wanted_id','=','categorys.id')->where([['status',1],['category_id',$id]])->get();
        return view('welcome',compact('category','products','item'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function about()
    {
        $category=Category::where('parent_id', '<=' , 0)->get();
        $item=Category::where('parent_id', '>' , 0)->get();
        return view('about' , compact('category','item'));
    }

    public function contact()
    {
        $category=Category::where('parent_id', '<=' , 0)->get();
        $item=Category::where('parent_id', '>' , 0)->get();
        return view('contact' , compact('category','item'));
    }

}
