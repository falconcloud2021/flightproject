<?php $__env->startSection('content'); ?>
        
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Каталог товаров магазина </h3>
                <a name="first_name"><?php echo e($user->first_name); ?></a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/product/edit">Категории</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Товары</li>
                    </ol>
                </nav>
            </div>
            <div class="row"> 
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                                 <span class="d-flex align-items-center purchase-popup">
                                    <a href="/admin/product/edit">
                                     <button class="mdi mdi-more btn btn-md btn-gradient-info mt-0" > + Добавить товар!</button>  
                                    </a>
                                 </span>

                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Price </th>
                                        <th> Icon </th>
                                        <th> Title </th>
                                        <th> Rating </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td>
                                        <img class="img-fluid"
                                         src="/resources/media/images/<?php echo e($product->img); ?>"
                                         alt="<?php echo e($product->title); ?>">
                                        </td>
                                        <td><?php echo e($product->title); ?></td>
                                        <td><?php echo e($product->rating); ?></td>
                                        <td>
                                        <a href="/admin/product/view/<?php echo e($product->id); ?>"
                                        title="View">
                                        <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="/admin/product/edit/<?php echo e($product->id); ?>"
                                        title="Edit">
                                        <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="/admin/product/delete/<?php echo e($product->id); ?>"
                                        title="Delete">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv9\app\Views/admin/product_all.blade.php ENDPATH**/ ?>