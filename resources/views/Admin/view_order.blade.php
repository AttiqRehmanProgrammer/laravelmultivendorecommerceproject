PE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="admin/text/css" href="admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
  @include('Admin.slidbar')
    <!-- partial -->
   @include('Admin.header')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.nav')

      <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Orders </h4>
                  <div class="card">
              @if(session()->has('deletemsg'))
                <div class="btn btn-danger ">

                
                {{session()->get('deletemsg')}}
             </div>
                    @endif

                    <div class="card">
              @if(session()->has('updatesms'))
                <div class="alert alert-success ">

                
                {{session()->get('updatesms')}}
             </div>
                    @endif


                    @if(session()->has('smsproduct'))
                <div class="alert alert-success ">

                
                {{session()->get('smsproduct')}}
             </div>
                    @endif
                  <p class="card-description">
                     <code></code>
                  </p>
                  <div class="table-responsive table table-hover table-bordered table-striped">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                         #id
                          </th>
                          
                          <th>
                          Name
                          </th>
                          <th>
                          product_title 
                          </th>
                          <th>
                          quantity
                          </th>
                          <th>
                          image
                          </th>
                          <th>
                          price
                          </th>
                          <th>
                          Email      
                          </th>
                          <th>
                          Phone
                          </th>
                          <th>
                          Address
                          </th>
                          <th>
                          User_id
                          </th>
                          <th>
                          Product_id
                          </th>
                          <th>
                          payment_status
                          </th>
                          <th>
                          Delivery_status
                          </th>

                          <th>
                          Delivered                        
                         </th>
                         <th>
                       Print PDF                       
                         </th>
                         
                        
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($orders as $Order)
                  
                        <tr>
                          <td>{{$Order->id}}</td>
                          <td>{{$Order-> name}}</td>
                          <td>{{$Order-> product_title }}</td>
                          <td>{{$Order-> quantity }} </td>
                          <td>
                            <img class="rounded" style="margin:auto," height="100" width="100"  src="/product/{{$Order->image}}">
                        </td>
                          <td>{{$Order-> price }} </td>
                          <td>{{$Order-> email }} </td>
                          <td>{{$Order-> phone }}</td>
                          <td> {{$Order->address}}</td>
                        
                          <td>{{$Order-> user_id }} </td>
                          <td>{{$Order-> Product_id}}</td>
                          <td>{{$Order-> payment_status }}</td>
                          <td>{{$Order-> Delivery_status }}</td>
                          <td>
                            <a   onclick="return confirm('Are you sure to Delete this')" href="{{url('/delete_Order')}}/{{$Order->id}}">
         <button class="btn btn-danger">cancelled</button>
        </a>
      
         <a href="{{url('/update_Order')}}/{{$Order->id}}">
       
         </a>
         @if($Order->Delivery_status=='Processing')
         <a href="{{url('/Delivered')}}/{{$Order->id}}"> <button class="btn btn-success">Delivered</button></a>
        

         

         @else
         <p>completed<p>
         @endif  
        
        </td>
        <td>
        <a href="{{url('/Print_PDF')}}/{{$Order->id}}"> <button class="btn btn-dark">Print PDF</button></a>
        <t/d>
        </tr> 
                          
                       
         
      
       
        
                      
                      
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
  
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>