<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Maincontrollers@mainpage');


route::get('/single/{pro_id}/{pro_name}','Maincontrollers@single');
route::get('/singleproducts/{pro_id}/{pro_name}','Maincontrollers@singleproducts');

Auth::routes(['register' => true]);
Auth::routes(['verify' => true]);

Route::get('/about' , 'Maincontrollers@about')->name('about');
Route::get('/contact' , 'Maincontrollers@contact')->name('contact');
route::post ('/suggests','Admincontrollers@suggests')->name('suggests');

route::group(['prefix'=>'home'] , function (){

    Route::get('/', 'HomeController@index')->name('home');
    route::get ('admin','Admincontrollers@category')->name('add1');
    route::post ('add','Admincontrollers@addcategory')->name('add');
    route::post ('delete','Admincontrollers@deletecategory')->name('delete');
    route::post ('delcat','Admincontrollers@delcat');
    Route::get ( '/product', 'Admincontrollers@product')->name('product');
    Route::get ( '/manageusers', 'Admincontrollers@manageusers')->name('manageusers');
    Route::post ( '/addproduct', 'Admincontrollers@addproduct' );
    Route::post ( '/image', 'Admincontrollers@image');
    Route::post ( '/image1', 'Admincontrollers@image1');
    route::get('/search','Admincontrollers@search');
    route::post('/deletepro','Admincontrollers@deletepro');
    route::post('/update','Admincontrollers@update')->name('update');
    route::post('/updateproduct','Admincontrollers@updateproduct')->name('updateproduct');
    route::post('/updateimages','Admincontrollers@updateimages')->name('updateimages');
    route::post('/deleteimg','Admincontrollers@deleteimg');
    route::post('/updateproducts','Admincontrollers@updateproducts')->name('updateproducts');
    route::get('/addbrands','Admincontrollers@addbrands')->name('brands');
    route::post('/brands','Admincontrollers@brands')->name('addbrands');
    route::post ('deletebrands','Admincontrollers@deletebrands')->name('deletebrands');
    route::get('getbrands','Admincontrollers@getbrands');
    route::get('getimages','Admincontrollers@getimages');
    route::get('dashboard','HomeController@dashboard');
    route::post('/postcm' , 'HomeController@postcm')->name('postcm');
    route::post('/postanswer' , 'HomeController@postanswer')->name('postanswer');
    route::get('comments' , 'Admincontrollers@comments')->name('comments');
    route::post('/deletecomment' , 'Admincontrollers@deletecomment');
    route::post('/updatecomments' , 'Admincontrollers@updatecomments');
    route::post('/updatecount' , 'Admincontrollers@updatecount');
    route::post('/addtocart' , 'HomeController@addtocart')->name('addtocart');
    route::post('/deletecart' , 'HomeController@deletecart')->name('deletecart');

});
route::get('/getcomments','Admincontrollers@getcomments');
route::get ( '/viewcat', 'Admincontrollers@viewcat' );
route::get ( '/vueitems', 'Admincontrollers@readItems' );





