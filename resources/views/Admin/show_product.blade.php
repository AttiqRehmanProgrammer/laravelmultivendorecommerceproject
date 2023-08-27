<!DOCTYPE html>
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

  <style type="text/css">
     .rounded {
    width: 150px;
    height: 150px;
    background-color: yellow;
  }
  </style>
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
  
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
   
           <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Table</h4>
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
                          Product Title
                          </th>
                          <th>
                          Product Description
                          </th>
                          <th>
                          Product image
                          </th>
                          <th>
                          Product Category
                          </th>
                          <th>
                          Product Quantity
                          </th>
                          <th>
                          Product Price
                          </th>
                          <th>
                          Product Discount Price
                          </th>
                          <th>
                          Action
                          </th>
                          <th>
                          Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                    
                      @foreach($proshow as $Product)
                        <tr>
                          <td>{{$Product->id}}</td>
                          <td>{{$Product-> title}}</td>
                          <td>{{$Product-> Description}}</td>
                          <td>
                            <img class="rounded" style="margin:auto," height="100" width="100"  src="/product/{{$Product->image}}">
                        </td>
                          <td>{{$Product-> category}}</td>
                          <td>{{$Product-> quantity}}</td>
                          <td>{{$Product-> price}}</td>
                          <td>{{$Product-> discount_price}}</td>
                          
                          
                       
                          <td><a   onclick="return confirm('Are you sure to Delete this')" href="{{url('/delete_product')}}/{{$Product->id}}">
         <button class="btn btn-danger">delete</button>
        </a>
      
         <a href="{{url('/update_product')}}/{{$Product->id}}">
        <button class="btn btn-success">Edit</button>
         </a></td>
                        </tr>
                      
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  
        @include('Admin.footer')
  <!-- plugins:js -->
  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="admin/vendors/chart.js/Chart.min.js"></script>
  <script src="admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="admin/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/template.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/dashboard.js"></script>
  <script src="admin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

