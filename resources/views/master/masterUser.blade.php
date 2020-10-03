<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Lab Fikom UMI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/lte/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/lte/src/assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="/lte/src/assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="/lte/src/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/lte/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/lte/src/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="css/style-date.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/lte/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/lte/src/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/lte/src/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
        @include('admin.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
         @include('users.asisten.sidebarr')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  @yield('title')
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
                @yield('as-content')
                @yield('jadwalasisten')
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/lte/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/lte/src/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/lte/src/assets/js/shared/off-canvas.js"></script>
    <script src="/lte/src/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/lte/src/assets/js/demo_1/dashboard.js"></script>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>