<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\custregmodel;
use App\Models\userlog;
use App\Models\item;
use App\Models\categories;
use App\Models\cart;


class Customerregcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $s=custregmodel::all();
     return view('custview',compact('s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customerreg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getName=request('name');
        $getEmail=request('email');
        $getPhonenumber=request('phno');
        $getCountry=request('add1');
        $getState=request('add2');
        $getCity=request('add3');
        $getHouseno=request('add4');
        $getPlace=request('add5');
        $getPassword=request('password');
        $getConfirmpassword=request('cpassword');

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phno'=>'required|min:10|max:10',
            'add1'=>'required',
            'add2'=>'required',
            'add3'=>'required',
            'add4'=>'required',
            'add5'=>'required',
            'password'=>'required|min:5|max:15',
            'cpassword'=>'required|min:5|max:15',

        ]) ;

      

      $cust=new custregmodel();
      $user=new userlog();
     
      if($getPassword == $getConfirmpassword)
      {

      $cust->name=$getName;
      $cust->email=$getEmail;
      $cust->phno=$getPhonenumber;
      $cust->add1=$getCountry;
      $cust->add2=$getState;
      $cust->add3=$getCity;
      $cust->add4=$getHouseno;
      $cust->add5=$getPlace;
      $cust->password=$getPassword;
      $cust->cpassword=$getConfirmpassword;

      $user->name=$getName;
      $user->phno=$getPhonenumber;
      $user->password=$getPassword;
      $user->usertype="custregmodel";

      $cust->save();
      $user->save();

      if($cust && $user)
      {
 
      $i=custregmodel::select('name')->where('phno','like'."$getPhonenumber")->first();
      $request->session()->put('name',$i);
      return redirect('/login');
      }
      else
      {
        echo "<script>alert('Password is not correct');window.location='/custreg';</script>"; 
      }
    }
    }

    public function viewproduct()
    {
        $item=item::all();

        return view('shop',compact('item'));
    }

    public function productdetails($id)
    {
        $item=item::find($id);
        return view('productdetails',compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
