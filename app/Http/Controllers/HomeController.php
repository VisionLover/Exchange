<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use App\Rules\Captcha;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->id();
        $user = User::with('products')->where('id',$id)->get();
        foreach($user as $users) {
            $name = $users->products;
            $sum = $users->products->sum('price');
        }
        $suggests = [];
        $userproducts = Product::where([['user_id',auth()->id()],['status',1]])->get();
        foreach ($userproducts as $userProduct){
            $category_id = $userProduct->category_id;
            $wanted_id = $userProduct->wanted_id;
            $suggest = Product::where([['category_id',$wanted_id],['wanted_id',$category_id]])->get();
            foreach ($suggest as $mysuggest)
                array_push($suggests,"http://127.0.0.1:8000/single/$mysuggest->id/$mysuggest->slack");
        }
        return view('home' , compact('name' , 'sum','suggests'));
    }

    public function dashboard()
    {
        return redirect()->back();
    }

    public function postcm(Request $request)
    {
        $productid = $request->productid ;
        $userid = $request->userid;
        $comment = $request->comment;
        $user = User::where('id',$userid)->get();
        $name = $user[0]['name'];
        $comments = new Comment();
        $comments->text = $comment;
        $comments->status = 0 ;
        $comments->parent_id = 0;
        $comments->user_id = $userid;
        $comments->product_id = $productid;
        $comments->name = $name;
        $comments->save();
    }

    public function postanswer(Request $request)
    {
        $productid = $request->productid ;
        $userid = $request->userid;
        $answer = $request->answer;
        $id = $request->id;
        $user = User::where('id',$userid)->get();
        $name = $user[0]['name'];
        $comments = new Comment();
        $comments->text = $answer;
        if (\Gate::allows('isAdmin')) {
            $comments->status = 1;
        }
        else {
            $comments->status = 0;
        }
        $comments->parent_id = $id;
        $comments->user_id = $userid;
        $comments->product_id = $productid;
        $comments->name = $name;
        $comments->save();
    }

    public function addtocart(Request $request)
    {
        $user = auth()->id();
        $pid = $request->id;
        $product = Product::find($pid);
        $images = User::find($user);
        $id = auth()->id();
        $exists = false;
        $user = User::with('products')->where('id',$id)->get();
        foreach($user as $users) {
            $name = $users->products;
            foreach ($name as $names){
                if ($names->id == $pid){
                    $exists = true;
                }
            }
        }
        if($exists == false){
            $product->users()->attach($images);
        }
        return redirect()->back();

    }

    public function deletecart(Request $request)
    {
        $id = auth()->id();
        $proid = $request->proid;
        $product = Product::find($proid);
        $product->users()->detach($id);
        return redirect()->back();

    }
}
