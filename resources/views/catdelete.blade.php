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
                            <h2> Category Delete</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

<!--================category_add Area =================-->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h6 class="mb-0">Category Delete</h6>
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
<form action='/catdel/{{$category->id}}' method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label for=" ">Name</label>
<input type="text" name="catname" class="form-control" value="{{ $category->catname }}" placeholder="Enter name">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for=" ">Description</label>
<input type="text" name="desc" class="form-control" value="{{ $category->desc }}" placeholder="Enter desc">
</div>
</div>



<div class="col-md-6">
<div class="form-group">
<label for=" ">Show/hide</label>
<input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : ' ' }} >
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label for=" "></label>
<button type="submit" class="btn btn-primary">Delete</button>
</div>
</div>





</div>
</form></div>
</div></div></div>
</body>
<!--================category Area =================-->
@endsection