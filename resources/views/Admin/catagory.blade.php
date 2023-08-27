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


        
        <div class=" border border-success col-8 grid-margin stretch-card  ">
              <div class="card   ">
                @if(session()->has('messsage'))
                <div class="alert alert-success">

                
                {{session()->get('messsage')}}
</div>
                    @endif
                <div class="card-body">
                  <h4 class="card-title "> Add Catagory</h4>
                  <p class="card-description">
                    Use the <code>Category </code> 
                  </p>
                  <form   action="{{url('add_Catagory')}}"  method="post" class="form-inline  ">

                  @csrf
                    <label class="sr-only" for="inlineFormInputName2">Catagory</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" name="Catagory" id="inlineFormInputName2" placeholder="Catagory">
                  
                    <label class="sr-only" for="inlineFormInputGroupUsername2">2 Catagory</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-2">ADD CATAGORY</button>
                  </form>
                </div>
              </div>
            </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>