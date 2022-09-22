<?php

namespace App\Http\Controllers;

use App\Color;
use App\Comment;
use App\Product;
use App\Category;
use App\Image;
use App\Brand;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Admincontrollers extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function category()
    {
        if (\Gate::allows('isAdmin')) {
            return view('add');
        }
        else{
            abort(403,"sorry . you cant do this action");
        }
    }

    public function deletecategory(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $name = $request->del;
            $category = Category::where('name', $name)->get();
            $parent_id = $category[0]['id'];
            $level = Category::where('parent_id' , $parent_id)->get();
            if(isset($level[0]['id'])) {
                foreach ($level as $levels) {
                    $parent_id1 = $levels['id'];
                    Category::where('parent_id', $parent_id1)->delete();
                }
            }
            Product::where('category_id' , $parent_id)->update(['category_id' => null]);
            Category::where('parent_id' , $parent_id)->delete();
            Category::where('name', $name)->delete();

        }
        else{
            abort(403,"sorry . you cant do this action");
        }
    }

    public function addcategory(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $name = $request->name;
            $parent = $request->parent;
            $category = new Category();
            $category->name = $name;
            $category->parent_id = $parent;
            $category->save();
            $category = Category::where('id', $parent)->get();
            if(isset($category[0]['parent_id'])) {
                    if ($category[0]['parent_id'] == 0) {
                        Category::where('id', $parent)->update(['parent_id' => -1]);
                    }
                    if ($category[0]['parent_id'] > 0) {
                        $parent_id = $category[0]['parent_id'];
                        Category::where('id', $parent_id)->update(['parent_id' => -2]);
                    }
            }

        }
        else{
            abort(403,"sorry . you cant do this action");
        }

    }

    public function delcat(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $name = $request->id;
            $category = Category::where('id', $name)->get();
            $parent_id = $category[0]['id'];
            $level = Category::where('parent_id' , $parent_id)->get();
            if(isset($level[0]['id'])) {
                foreach ($level as $levels) {
                    $parent_id1 = $levels['id'];
                    Category::where('parent_id', $parent_id1)->delete();
                }
            }
            Product::where('category_id' , $parent_id)->update(['category_id' => null]);
            Category::where('parent_id' , $parent_id)->delete();
            Category::where('id', $name)->delete();
        }
        else{
            abort(403,"sorry . you cant do this action");
        }
    }

    public function readItems()
    {
        if (\Gate::allows('isAdmin')) {
            $data = Category::all();
            return $data;
        }
        else{
            abort(403,"sorry . you cant do this action");
        }

    }

    public function update(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->upid;
            $name = $request->upn;
            $category = Category::where('id', $id)->update(['name' => $name]);
        }
        else{
            abort(403,"sorry . you cant do this action");
        }

    }

    public function viewcat()
    {
        $data = Category::where('parent_id', '>=', 0)->get();
        return $data;
    }

    public function product()
    {
        $red = Color::where('groups' , 'red')->get();
        $pink = Color::where('groups' , 'pink')->get();
        $orange = Color::where('groups' , 'orange')->get();
        $yellow = Color::where('groups' , 'yellow')->get();
        $green = Color::where('groups' , 'green')->get();
        $brown = Color::where('groups' , 'brown')->get();
        $blue = Color::where('groups' , 'blue')->get();
        $purple = Color::where('groups' , 'purple')->get();
        $white = Color::where('groups' , 'white')->get();
        $gray = Color::where('groups' , 'gray')->get();
        return view('addproduct' , compact('red','pink','orange','yellow','green','brown','blue','purple','white','gray'));
    }

    public function image(Request $request)
    {
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move('productimage', $filename);
        return $filename;
    }

    public function image1(Request $request)
    {
        $id = $request->proid;
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move('productimage', $filename);
        $image = new Image();
        $image->image = $filename;
        $image->save();
        $product = Product::find($id);
        $images = Image::find($image->id);
        $product->images()->attach($images->id);
    }

    public function addproduct(Request $request)
    {
            $description = $request->text;
            $name = $request->pname;
            $price = $request->pprice;
            $productimage = $request->pimage;
            $category_name = $request->pcat;
            $category_id = Category::where('name', $category_name)->get('id');
            $id = json_decode($category_id, true)[0]['id'];
            $wanted_name = $request->pwant;
            $wante_id = Category::where('name', $wanted_name)->get('id');
            $wanted_id = json_decode($wante_id, true)[0]['id'];
            $product = new Product();
            $product->productname = $name;
            $product->price = $price;
            $product->count = 1;
            $product->category_id = $id;
            $product->wanted_id = $wanted_id ;
            $product->user_id = Auth::user()->id;
            $product->description = $description;
            $product->productimage = $productimage;

            $count = count(str_split($name));
            $a = array();
            for ($x = 0; $x < $count; $x = $x + 1) {
                $slack = str_split($name)[$x];
                if ($slack == " ") {
                    $slack = "-";
                    array_push($a, $slack);
                } else {
                    array_push($a, $slack);
                }

            }
            $b = implode("", $a);
            $product->slack = $b;
            $product->save();
            $color = $request->colors;
            foreach ($color as $colors) {
                $product = Product::find($product->id);
                $images = Color::find($colors);
                $product->colors()->attach($images);
            }
    } //todo change

    public function search()
    {
        if (\Gate::allows('isAdmin')) {
            $search = Product::all();
        }
        else{
            $search = Product::where('user_id',Auth::user()->id)->get();
        }
        return $search;
    }

    public function deletepro(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->productid;
            $product = Product::find($id);
            try {
                unlink("productimage/$product->productimage");
                $images = $product->with('images')->get()[0]->images;
                foreach ($images as $image) {
                    unlink("productimage/$image->image");
                    Image::where('image', $image->image)->delete();
                }
            }
            catch (\Exception $e){
                report($e);
            };
            $product->images()->detach();
            $product->colors()->detach();
            Product::where('id', $id)->delete();
        }
        else{
            abort(403,"sorry . you cant do this action");
        }
    }

    public function comments()
    {
        if (\Gate::allows('isAdmin')) {
            $comments = Comment::all();
            return view('comments');
        }
        else{
            abort(403,"sorry . you cant do this action");
        }
    }

    public function getcomments()
    {
        if (\Gate::allows('isAdmin')) {
            $data = Comment::all();
            return $data;
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function getimages()
    {
        if (\Gate::allows('isAdmin')) {
            $data = Product::with('images')->get();
            return $data;
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function deletecomment(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->id;
            Comment::where('id' , $id)->delete();
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function updatecomments(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->id;
            $comments = Comment::where('id', $id)->get();
            if ($comments[0]['status'] == 0) {
                Comment::where('id', $id)->update(['status' => 1]);
            }
            if ($comments[0]['status'] == 1) {
                Comment::where('id', $id)->update(['status' => 0]);
            }
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function updatecount(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->id;
            $comments = Product::where('id', $id)->get();
            if ($comments[0]['count'] == 0) {
                Product::where('id', $id)->update(['count' => 1]);
            }
            if ($comments[0]['count'] == 1) {
                Product::where('id', $id)->update(['count' => 0]);
            }
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function updateproduct(Request $request)
    {
        $id = $request->upid;
        $upn = $request->upn;
        $user_id = Product::where('id', $id)->get()[0]['user_id'];
        if (Auth::user()->id == $user_id) {
            Product::where('id', $id)->update(['price' => $upn]);
        }
        else{
            abort(403, "sorry . you cant do this action");
        }
    }

    public function updateproducts(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->id;
            $products = Product::where('id', $id)->get();
            $categoryId = $products[0]['category_id'];
            $wantedId = $products[0]['wanted_id'];
            $user_id = $products[0]['user_id'];
            $pid = $products[0]['id'];
            $slack = $products[0]['slack'];
            $sends = Product::where([['category_id', $wantedId],['wanted_id',$categoryId],['status',1]])->get();
            if ($products[0]['status'] == 0) {
                Product::where('id', $id)->update(['status' => 1]);

                $user = User::where('id',$user_id)->get();
                $user_email = $user[0]->email;
                $userName = $user[0]->name;
                $data = ['email' => $user_email, 'userName' => $userName, 'id' => $pid , 'slack' => $slack];
                Mail::send(['html' => 'emails.allow'], $data, function (Message $message) use ($user_email) {
                    $message
                        ->to($user_email)
                        ->from('exchange5313@gmail.com', 'Esther')
                        ->subject('Esther');
                });

                foreach ($sends as $send) {
                    $user_id = $send->user_id;
                    $user = User::where('id',$user_id)->get();
                    $user_email = $user[0]->email;
                    $userName = $user[0]->name;
                    $data = ['email' => $user_email, 'userName' => $userName, 'id' => $pid , 'slack' => $slack];
                    Mail::send(['html' => 'emails.subscribe'], $data, function (Message $message) use ($user_email) {
                        $message
                            ->to($user_email)
                            ->from('exchange5313@gmail.com', 'Esther')
                            ->subject('Esther');
                    });
                }
            }
            if ($products[0]['status'] == 1) {
                Product::where('id', $id)->update(['status' => 0]);
            }
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function updateimages(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->id;
            $images = Image::where('id', $id)->get();
            if ($images[0]['status'] == 0) {
                Image::where('id', $id)->update(['status' => 1]);
            }
            if ($images[0]['status'] == 1) {
                Image::where('id', $id)->update(['status' => 0]);
            }
        } else {
            abort(403, "sorry . you cant do this action");
        }
    }

    public function deleteimg(Request $request)
    {
        if (\Gate::allows('isAdmin')) {
            $id = $request->imageid;
            $image = Image::find($id);
            $image->products()->detach();
            Image::where('id', $id)->delete();
            try {
                unlink("productimage/$image->image");
            }
            catch (\Exception $e){
                    report($e);
                };
        }
        else{
            abort(403,"sorry . you cant do this action");
        }
    }

    public function suggests(Request $request)
    {
        $name = $request->name;
        $subject = $request->subject;
        $email = $request->email;
        $message = $request->message;
        $data = ['email' => $email, 'name' => $name, 'subject' => $subject , 'msg' => $message];
        $user_email = "m.mousavi5313@gmail.com";
        Mail::send(['html' => 'emails.contactadmin'], $data, function (Message $message) use ($user_email) {
            $message
                ->to($user_email)
                ->from('exchange5313@gmail.com', 'Esther')
                ->subject('Esther');
        });
        return redirect()->back();
    }

    public function manageusers()
    {
        $users = User::all();
        return view('manageusers',compact('users'));
    }
}
