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
      
        <!-- partial -->
        
          <div class="   border border-success col-md-6 grid-margin stretch-card">
              <div class="card">
              @if(session()->has('smsproduct'))
                <div class="alert alert-success ">

                
                {{session()->get('smsproduct')}}
             </div>
                    @endif
                <div class="card-body">
                  <h4 class="card-title">PRODUCT FORM </h4>
                  <p class="card-description">
                  Product Add here
                  </p>
                  <form class="forms-sample" action="{{url('add_product')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Product Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" id="exampleInputUsername2" placeholder="What a Title">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Product Description</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Description" id="exampleInputEmail2" placeholder="Waht a Description">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Product image Here</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="image" id="exampleInputEmail2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Product Category</label>
                      <div class="col-sm-9">
                      <select class="col-sm-12" name="category"  >
                        @foreach($data as $Category)

                      <option >{{$Category-> category}}</option>
                      @endforeach
                     </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Product Quantity</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="quantity"  id="exampleInputEmail2" placeholder="What a Quantity">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Product Price</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="price" id="exampleInputMobile" placeholder="What a price">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label"> Product Discount price</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="discount_price" id="exampleInputPassword2" placeholder="What a discount is">
                      </div>
                    </div>
                   
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
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

