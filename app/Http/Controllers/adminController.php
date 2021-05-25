<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\item;
use App\Models\categories;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\order;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemindex()
    {
       $items=item::all();
       return view('/item',compact('items'));
    }
    public function itemview()
    {
       $items=item::all();
       return view('/vitem',compact('items'));
    }

    
    public function catindex()
    {
      $category=categories::all();  
      return view('category',compact('category'));
      
    }

    public function orderindex()
    {
     $s=order::all();
     return view('ordersview',compact('s'));
    }
    public function report()
    {
     $s=order::all();
     return view('orderreport',compact('s'));
    }



    public function addcat()
    {
  
        return view('categoryadd');

    }

    public function additem()
    {
        $category=categories::all();
        return view('itemadd',compact('category'));
    }
    public function storeitem(Request $request)
    {
        $item= new item;
       
        
        $getname=request('name');
        $getDescription=request('description');
        $getprice=request('price');
        $getimage=$request->file('image');
        $name=$getimage->getClientOriginalName();

        $getimage->move(public_path('/uploads/categoryimage/'),$name);


        
       
        $item->name=$getname;
        $item->description=$getDescription;
        $item->price=$getprice;
        $item->image=$name;
       
  
        $item->save();
        return redirect()->back()->with('status','Item added');
    }
    public function storecat(Request $request)
    {
        $cat= new categories;
       
        $getCatname=request('catname');
        $getDescription=request('desc');
        $getstatus=request('status');
     
        
  
        $cat->catname=$getCatname;
        $cat->desc=$getDescription;
        $cat->status=$getstatus == true ? '1': '0';
  
        $cat->save();
        return redirect()->back()->with('status','Category added');
  
        
    }
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
      //return view('itemadd');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category=categories::find($id);
       return view('catedit',compact('category'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
      $cat=categories::find($id);
       
      $getCatname=request('catname');
      $getDescription=request('desc');
      $getstatus=request('status');
      

      $cat->catname=$getCatname;
      $cat->desc=$getDescription;
      $cat->status=$getstatus == true ? '1': '0';

      $cat->save();
      return redirect('/category');

    }
    
    public function itemedit($id)
    {
       $item=item::find($id);
       return view('itemedit',compact('item'));
      
    }

    public function itemupdate(Request $request, $id)
    {
      $item=item::find($id);
       
       
      
      $getname=request('name');
      $getDescription=request('description');
      $getprice=request('price');
      $getimage=$request->file('image');
      $name=$getimage->getClientOriginalName();

      $getimage->move(public_path('/uploads/categoryimage/'),$name);


      
      
      $item->name=$getname;
      $item->description=$getDescription;
      $item->price=$getprice;
      $item->image=$name;
     

      $item->save();
      return redirect('/item');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletecat($id)
    {
        $category=categories::find($id);
        return view('catdelete',compact('category'));
    }

   

    public function destroycat($id)
    {
        $category=categories::find($id);

        $category>delete();
        return redirect('/category');
    }

    public function deleteview($id)
    {
        $item=item::find($id);
        return view('itemdelete',compact('item'));
    }

   

    public function destroy($id)
    {
        $item=item::find($id);

        $item->delete();
        return redirect('/item');
    }


    public function addcart(Request $req)
 
      {

       if($req->session()->has('name'))
        {
           $cart=new cart;
           $cart->userid=$req->session()->get('name');
           $cart->productid=$req->productid;
           $cart->save();
           echo "<script>alert('product added Successfully to the cart');window.location='/shop';</script>";
        }
     else{
           return redirect('/login');
         }

    }

    public function productdetails($id)
    {
        $item=item::find($id);
        return view('productdetails',compact('item'));
    }

    function cartlist()
    {
        $userid=session::get('name');
        $item=DB::table('carts') 
        ->join('items','carts.productid','=','items.id')
        ->where('carts.userid',$userid)
        ->select('items.*','carts.id as cart_id')
        ->get();

        return view('cartlist',compact('item'));
    }

    public function removecart($id)
    {
        cart::destroy($id);
        echo "<script>alert('Item removed Successfully from the cart');window.location='/cart';</script>";
    }

    function ordernow()
    {
        $userid=session::get('name');
        $total= $item=DB::table('carts') 
        ->join('items','carts.productid','=','items.id')
        ->where('carts.userid',$userid)
        ->select('items.*')
        ->sum('items.price');

        return view('ordernow',compact('total'));
    }

    function orderplace(Request $req)
    {
        $userid=session::get('name');
        $allcart=cart::where('userid',$userid)->get();

        foreach($allcart as $cart)
        {
            $order=new order;
            $order->productid=$cart['productid'];
            $order->userid=$cart['userid'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            cart::where('userid',$userid)->delete();
        }
         $req->input();
         return redirect('/checkout');
    }

    function myorders()
    {
        $userid=session::get('name');
        $orders= DB::table('orders') 
        ->join('items','orders.productid','=','items.id')
        ->where('orders.userid',$userid)
        ->get();

        return view('myorders',compact('orders'));
    }

    public function pay()
    {
        echo "<script>alert('Payment Succesfull');window.location='/i';</script>";
    }
    
    public function search(Request $request)
    {
        $search=$request->get('search');
        $posts=DB::table('items')->where('name','like','%'.$search.'%')->paginate(5);
        return view('theme1',compact('posts'));
    }
}
