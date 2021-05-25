

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/about_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Orders View</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
   
             
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                        </div>
                    </div>
                </div>
                                <div class="container">
                                 <div class="row">
                                 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
                                 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                 <form action="/oview" method="post" >


                                  {{csrf_field()}}
                                  <table class="table">
                                 <tr>
                                     <th>productid</th>
                                     <th>userid</th>
                                     <th>status</th>
                                     <th>payment_method</th>
                                     <th>payment_status</th>
                                     <th>address</th>
                                 </tr>
                                 @foreach($s as $ans)
                                 <tr>
                                     <td>{{ $ans->productid}}</td>
                                     <td>{{ $ans->userid}}</td>
                                     <td>{{ $ans->status}}</td>
                                     <td>{{ $ans->payment_method}}</td>
                                     <td>{{ $ans->payment_status}}</td>
                                     <td>{{ $ans->address}}</td>
                                     <td></td>
                                 </tr>

                              @endforeach
                              </table>
                              <input type="button" value="Download" onclick="window.print();">
                              </form>
                              <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div></div></div>
                                <div class="col-md-12 form-group">
                           <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    