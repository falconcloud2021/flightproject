<?php $__env->startSection('content'); ?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Диаграмма-js </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Диаграммы</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Диаграмма-js</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Линейная диаграмма</h4>
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Гистограмма</h4>
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Area chart</h4>
                    <canvas id="areaChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doughnut chart</h4>
                    <canvas id="doughnutChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <canvas id="pieChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Scatter chart</h4>
                    <canvas id="scatterChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
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
     <script src="/resources/admin/assets/js/chart.js"></script>  
    <!-- End custom js for this page --> 
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv8\app\Views/user/charts.blade.php ENDPATH**/ ?>