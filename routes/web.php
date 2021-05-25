<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customerregcontroller;
use App\Http\Controllers\Welcomecontroller;
use App\Http\Controllers\loginactivity;
use App\Http\Controllers\adminController;

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

Route::get('/',function(){
    return view('index');
});

Route::get('/i',function(){
    return view('index2');
});
Route::get('/search1',[adminController::class,'search']);
Route::get('/login',[loginactivity::class,'create']);
Route::post('/logging',[loginactivity::class,'check']);
//Route::get('/logview',[Customerregcontroller::class,'index']);
Route::get('/custreg',[Customerregcontroller::class,'create']);
Route::post('/success',[Customerregcontroller::class,'store']);
Route::get('/cview',[Customerregcontroller::class,'index']);


//category
Route::get('/category',[adminController::class,'catindex']);
Route::get('/categoryadd',[adminController::class,'addcat']);
Route::post('/categorystore',[adminController::class,'storecat']);
Route::get('/catedit/{id}',[adminController::class,'edit']);
Route::post('/catupdate/{id}',[adminController::class,'update']);
Route::get('/catdelete/{id}',[adminController::class,'deletecat']);
Route::post('/catdel/{id}',[adminController::class,'destroycat']);

//item
Route::get('/item',[adminController::class,'itemindex']);
Route::get('/vitem',[adminController::class,'itemview']);
Route::get('/itemadd',[adminController::class,'additem']);
Route::post('/itemstore',[adminController::class,'storeitem']);
Route::get('/itemedit/{id}',[adminController::class,'itemedit']);
Route::post('/itemupdate/{id}',[adminController::class,'itemupdate']);
Route::get('/itemdelete/{id}',[adminController::class,'deleteview']);
Route::post('/itemdel/{id}',[adminController::class,'destroy']);

route::get('/viewitem',[adminController::class,'viewitem']);
route::get('/shop',[Customerregcontroller::class,'viewproduct']);
route::post('/productdetails/{id}',[Customerregcontroller::class,'productdetails']);
Route::get('/ordernow',[adminController::class,'ordernow']);
Route::post('/orderplace',[adminController::class,'orderplace']);
Route::get('/myorders',[adminController::class,'myorders']);
Route::get('/oview',[adminController::class,'orderindex']);

Route::get('/oreport',[adminController::class,'report']);
Route::get('/pay',[adminController::class,'pay']);


route::post('/addtocart',[adminController::class,'addcart']);

route::get('/cart',[adminController::class,'cartlist']);

route::get('/removecart/{id}',[adminController::class,'removecart']);

Route::get('/theme1', function () {
    return view('theme1');
});

Route::get('/shop1', function () {
    return view('shop');
});

Route::get('/cat',function(){
    return view('categoryview');
});
Route::get('/cart1',function(){
    return view('cart');
});
Route::get('/catindex',function(){
    return view('catindex');
});
Route::get('/checkout',function(){
    return view('payment');
});
Route::get('/confirm',function(){
    return view('confirm');
});
Route::get('/addprod',function(){
    return view('productadd');
});
Route::get('/adminview',function(){
    return view('adminpage');

});

Route::get('/sessiondelete',function(){
    if(session()->has('name'))
    {
        session()->pull('name');
    }
    return view('login');
});