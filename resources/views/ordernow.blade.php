@extends('theme1')


@section('content')
<body>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/about_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2> ORDER</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <div class="custom product">
    <div class="cl-sm-10">
    <table class="table">
    <tbody>
    
    <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
    </tr>
    <tr>
        <td>Tax</td>
        <td>$0</td>
    </tr>
    <tr>
        <td>Delivery</td>
        <td>$10</td>
    </tr>
    <tr>
        <td>Total Amount</td>
        <td>${{$total+10}}</td>
    </tr>
    <br>
    <br>
    <br>

    </tbody></table>
    <div>
    <form action="/orderplace" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    
    <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br> <br> 
    <input type="radio" value="cash" name="payment"><span>online payment</span><br>
    <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>

    </div>
    </div></div>
@endsection