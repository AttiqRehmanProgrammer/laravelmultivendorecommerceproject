<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($showdate as $Products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_Details',$Products->id)}}" class="option1">
                          Product Details
                           </a>
                           <a href="{{url('product_Details',$Products->id)}}" class="option2"> Addd to Cart

</a>
    
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$Products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$Products-> title}}
                        </h5>

                          @if($Products->discount_price!=null)
                          
                        <h6 style="color:red">
                        Discount price
                        <br>
                        ${{$Products-> discount_price}}

                        </h6>

                        <h6 style="text-decoration: line-through;color:blue">
                        Price
                        <br>
                        ${{$Products-> price}}
                        </h6>

                        @else
                        <h6 style="color:blue">
                        Price
                        <br>
                         ${{$Products-> price}}
                        </h6>
                         @endif


                     </div>
                  </div>
               </div>
             
              @endforeach

              <span style="padding-top:20px;">
              {!!$showdate->withQueryString()->links('pagination::bootstrap-5')!!}
              </span>
         </div>
      </section>