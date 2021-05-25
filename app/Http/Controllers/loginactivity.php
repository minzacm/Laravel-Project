<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlog;
use App\Models\custregmodel;

class loginactivity extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
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

    public function check(Request $request)
    {
      $getPhonenumber=request('phno');
      $getPassword=request('password');

      $this->validate($request,[

          'phno'=>'required',
          'password' => 'required|min:5|max:15'

      ]);

      $u=userlog::select('phno')->where('phno','like',"$getPhonenumber")->first();

      if(!$u)
      {
          echo "invalid user";
          return redirect('/login');
      }
      else
      {
          $p=userlog::select('password')->where('phno','like',"$u->phno")->first();



          if($p->password == $getPassword)
          {
              $ut=userlog::select('usertype')->where('phno','like',"$u->phno")->first();
              if($ut->usertype == 'custregmodel')
              {
                  $i=custregmodel::select('name')->where('phno','like',"$getPhonenumber")->first();
                  $request->session()->put('name',$i->name);
                  echo "<script>alert('successfully logged in');window.location='/i';</script>";
              }
              else 
              {
                echo "<script>alert('Welcome admin');window.location='/adminview';</script>";
                  //echo "admin";
              }
          }
          else
          {
            echo "<script>alert('Invalid user');window.location='/login';</script>";
              //return redirect('/');
          }
      }
    }
}
