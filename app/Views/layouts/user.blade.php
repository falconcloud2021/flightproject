<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> User @yield('title', 'Panel')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/resources/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/resources/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/resources/admin/assets/images/favicon.ico" />
  </head>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
            @include('user.partials.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">   
            <!-- partial:partials/_hesder.html -->
            @include('user.partials.header')
            <!-- partial:partials/_sidebar.html -->
            @include('user.partials.sidebar')

            @yield('content')       
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
            <!-- container-scroller -->
             @include('user.partials.footer')
    <!-- plugins:js -->
    <script src="/resources/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/resources/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/resources/admin/assets/js/off-canvas.js"></script>
    <script src="/resources/admin/assets/js/hoverable-collapse.js"></script>
    <script src="/resources/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/resources/admin/assets/js/dashboard.js"></script>
    <script src="/resources/admin/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  
</html>