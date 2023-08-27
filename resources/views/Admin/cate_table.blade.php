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

      
  
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


        <div class=" border border-success col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category Table</h4>
                  @if(session()->has('message'))
                <div class="alert alert-success">

                
                {{session()->get('message')}}
</div>
                    @endif
                  <p class="card-description">
                    Category Table <code>.</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#1</th>
                          <th>Category Name</th>
                        
                          <th>Action</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                   
                      @foreach($data as $Category)
                        <tr>
                          <td>{{$Category->id}}</td>
                          <td>{{$Category-> category}}</td>
                       
                          <td><a href="{{url('/cate/delete')}}/{{$Category->id}}">
         <button class="btn btn-danger">delete</button>
        </a>
      
         <a href="{{url('/testing')}}/{{$Category->id}}">
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