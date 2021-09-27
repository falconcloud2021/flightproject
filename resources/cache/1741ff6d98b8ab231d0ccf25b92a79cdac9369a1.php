<?php $__env->startSection('content'); ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Каталог товаров магазина </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Категории</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Товары</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Полный список товаров по категориям</h4>
                            <p class="card-description"> Выберите нужную категорию </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Role </th>
                                    <th> Title </th>
                                    <th> Actions </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->first_name); ?></td>
                                    <td><?php echo e($user->second_name); ?></td>
                                    <td><?php echo e($user->last_name); ?></td>
                                    <td>
                                    <img class="img-fluid"
                                    src="/resources/media/images/<?php echo e($user->img); ?>"
                                    alt="<?php echo e($user->title); ?>"
                                    >
                                    </td>
                                    <td><?php echo e($user->title); ?></td>
                                    <td>
                                    <a href="/admin/user/view/<?php echo e($user->id); ?>"
                                    title="View"
                                    >
                                    <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="/admin/user/edit/<?php echo e($user->id); ?>"
                                    title="Edit"
                                    >
                                    <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="/admin/user/delete/<?php echo e($user->id); ?>"
                                    title="Delete"
                                    >
                                    <i class="mdi mdi-delete"></i>
                                    </a>
                                    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- partial -->
    </div>

    
        
            
        
        
            
                
                    
                    
                        
                            
                            
                            
                            
                        
                    
                    
                
            
        
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv6\app\Views/admin/users.blade.php ENDPATH**/ ?>