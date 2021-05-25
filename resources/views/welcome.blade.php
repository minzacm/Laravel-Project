@extends('theme')

@section('content')
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<form method="post" action="">
{{csrf_field()}}
<table class="table">
<tr>
    <td>Phone Number</td>
    <td><input type="text" class="form-control" name="phno"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="text" class="form-control" name="password"></td>
</tr>

<tr>
    <td></td>
    <td><button class="btn btn-success">LOGIN</button></td>
</tr>
</table></div>
</form>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div></div></div>







@endsection