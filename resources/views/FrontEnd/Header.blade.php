<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{'/'}}"><img width="250" src="images/Screenshot__38_-removebg-preview.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{url('about')}}"></a></li>
                              <li><a href="{{url('testimonial')}}">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('allProduct')}}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('blog')}}">About</a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('Contact')}}">Contact</a>
                        </li>

                  

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('Add_cart')}}">Cart</a>
                        </li>






























                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        
<!-- LoginPanle -->
@if(Route::has('login'))
                    @Auth
                    <li class=" w-10 h-10 " style="width: 0rem;">
                    <x-app-layout>

                    </x-app-layout>
                        </li>
                    
                    @else
                        <ul class="LogSignButtons">
                            <a href="{{route('login')}}"><button class="LogInButton">Log In</button></a>
                            <a href="{{route('register')}}"><button class="SignUpButton">Sign Up</button></a>
                        </ul>

                    @endauth
                    @endif 
                     
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         
        