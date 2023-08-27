<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <!-- <link rel="shortcut icon" href="images/favicon.png" type=""> -->
      <title>Attiq-online-Shope</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('FrontEnd.Header')
         <!-- end header section -->
         <!-- slider section -->
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
         <!-- end inner page section -->
         <!-- why section -->
        
            
           
         <!-- end slider section -->
      </div>
      <!-- why section -->
     
      <!-- end why section -->
    
      <!-- arrival section -->
      @include('FrontEnd.New_Arrivals')
      <!-- end arrival section -->
     
      
      <!-- product section -->
 
      <!-- end product section -->

      <!-- subscribe section -->
    
      <!-- end subscribe section -->
      <!-- client section -->
     
      <!-- end client section -->
      <!-- footer start -->
      @include('FrontEnd.Footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/"></a><br>
         
            Distributed By <a href="" target="_blank">Attiq Mege shop</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>