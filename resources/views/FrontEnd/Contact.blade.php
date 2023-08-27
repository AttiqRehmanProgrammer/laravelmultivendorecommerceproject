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
         <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Contact us</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- why section -->
         <section class="why_section layout_padding">
            <div class="container">
            
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <div class="full">
                        <form action="index.html">
                           <fieldset>
                              <input type="text" placeholder="Enter your full name" name="name" required />
                              <input type="email" placeholder="Enter your email address" name="email" required />
                              <input type="text" placeholder="Enter subject" name="subject" required />
                              <textarea placeholder="Enter your message" required></textarea>
                              <input type="submit" value="Submit" />
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
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