<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/')}}admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('/')}}admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('/')}}admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/')}}admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/')}}admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('/')}}admin/images/logo.svg" alt="logo">
              </div>
              <h4>Parolu unutdunmu?</h4>
              <h6 class="font-weight-light">Email hesabinizi girin.</h6>


              <form method="POST" action="{{ route('admin.password.email') }}" class="pt-3">
              @csrf
                <div class="form-group">
                  <input type="email" id="email" name="email" class="form-control form-control-lg"  placeholder="Email">
                </div>

                <div class="flex items-center justify-end mt-4">
    
            <button type="submit" class="btn btn-primary">
            {{ __('E-poçt Parol Sıfırlama Linki') }}
            </button>
        </div>


              </form>


            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('/')}}admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('/')}}admin/js/off-canvas.js"></script>
  <script src="{{asset('/')}}admin/js/hoverable-collapse.js"></script>
  <script src="{{asset('/')}}admin/js/template.js"></script>
  <script src="{{asset('/')}}admin/js/settings.js"></script>
  <script src="{{asset('/')}}admin/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
