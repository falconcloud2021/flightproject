<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin <?php echo $__env->yieldContent('title', 'Panel'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/resources/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/resources/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/resources/admin/assets/plugins/quill/quill.snow.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/resources/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/resources/admin/assets/images/favicon.ico" />

    <?php echo $__env->yieldPushContent('css'); ?>

  </head>
  <body>
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
            <?php echo $__env->make('admin.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->

          <!-- partial -->

            <!-- HEADER -->
            <?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
          
          <!-- partial -->

          <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
      </div>
            <!-- container-scroller -->
            <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

  <!-- editor -->
  
  <script src="/resources/admin/assets/plugins/quill/quill.min.js"></script>

    <!-- Custom js for this page -->
    <script src="/resources/admin/assets/js/dashboard.js"></script>
    <script src="/resources/admin/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->

  <?php echo $__env->yieldPushContent('js'); ?>
  </body>
</html><?php /**PATH E:\OpenServer\domains\yaroslav.loc\app\Views/layouts/admin.blade.php ENDPATH**/ ?>