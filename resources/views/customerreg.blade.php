@extends('theme2')

@section('content')
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<form method="post" action="/success">


{{csrf_field()}}
<table class="table table-borderless">
<tr>
    <td>Name</td>
    <td><input type="text" class="form-control" name="name"></td>
    <span style="color:red" >@error('name') {{$message}} @enderror</span>
</tr>
<tr>
    <td>Email</td>
    <td><input type="text" class="form-control" name="email"></td>
    <span style="color:red" >@error('email') {{$message}} @enderror</span>
</tr>
<tr>
    <td>Phone Number</td>
    <td><input type="text" class="form-control" name="phno"></td>
    <span style="color:red" >@error('phno') {{$message}} @enderror</span>
</tr>
<tr>
    <td>Country</td>
    <td><input type="text" class="form-control" name="add1"></td>
    <span style="color:red" >@error('add1') {{$message}} @enderror</span>
</tr>
<tr>
    <td>State</td>
    <td><input type="text" class="form-control" name="add2"> </td>
    <span style="color:red" >@error('add2') {{$message}} @enderror</span>
</tr>
<tr>
    <td>City</td>
    <td><input type="text" class="form-control" name="add3"></td>
    <span style="color:red" >@error('add3') {{$message}} @enderror</span>
</tr>
<tr>
    <td>House no</td>
    <td><input type="text" class="form-control" name="add4"> </td>
    <span style="color:red" >@error('add4') {{$message}} @enderror</span>
</tr>
<tr>
    <td>Place</td>
    <td><input type="text" class="form-control" name="add5"></td>
    <span style="color:red" >@error('add5') {{$message}} @enderror</span>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" class="form-control" name="password"></td>
    <span style="color:red" >@error('password') {{$message}} @enderror</span>
</tr>
<tr>
    <td>Confirm Password</td>
    <td><input type="password" class="form-control" name="cpassword"></td>
    <span style="color:red" >@error('cpassword') {{$message}} @enderror</span>
</tr>
<tr>
    <td></td>
   <td><input type="submit" value="Register" class="btn btn-success"></td>
</tr>
</table></div>
</form>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div></div></div>







@endsection