<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCommerce </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
</head>

<body>
    
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="assets/img/icon/header_icon.png" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">USA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>+777 2345 7886</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="login.html">My Account </a></li>
                                       <li><a href="\custreg">Register </a></li>
                                       <li><a href="product_list.html">Wish List  </a></li>
                                       <li><a href="cart.html">Shopping</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                       
                                   </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="/category">Catagory</a></li>
                                            <li class="hot"><a href="#">Latest</a>
                                                <ul class="submenu">
                                                    <li><a href="product_list.html"> Product list</a></li>
                                                    <li><a href="single-product.html"> Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="cart.html">Card</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="confirmation.html">Confirmation</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Product Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                   <li class="d-none d-lg-block"> <a href="#" class="btn header-btn">Sign in</a></li>
                                </ul>
                            </div>
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
                            <h2>ADD PRODUCT</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
   
             
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h6 class="mb-0">Product</h6>
</div>
</div>
</div>
</div>
</div>

<div class="row mt=3">
<div class="col-md-12">
<div class="card">
@if(session('status'))
<div class="alert alert-success" role="alert">
{{session('status')}}
</div>
@endif

<div class="card body">
<form action="/itemstore" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label ">Category</label>
<select class="form-control" name="category">
@foreach($category as $category)
<option>{{$category->catname}}</option>
@endforeach
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label class="control-label ">Name</label>
<input type="text"  name="name" class="form-control" placeholder="Enter name">
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label class="control-label ">Description</label>
<input type="text"  name="description" class="form-control" placeholder="Enter name">
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label class="control-label ">Price<</label>
<input type="number" class="form-control" name="price">
</div>
</div>


<div class="row">
<div class="col-md-12">
<label class="control-label">Image</label>
<input type="file"  name="image">
</div></div>




<div class="col-md-6">
<div class="form-group">
<label for=" "></label>
<a class="btn btn-warning" href="/item">Back</a>
<button type="submit" class="btn btn-primary">Save</button>
</div>
</div>
</div>
</form>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div></div></div>
    <!--================login_part end =================-->

  