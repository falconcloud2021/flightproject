<?php $__env->startSection('content'); ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Перечень клиентов\пользователей сайта </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Категории</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Таблица с полным списком пользователей сайта</h4>
                            <p class="card-description"> Есть возможность выбора пользователя для установки прав доступа или дальнейшего удаления </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> First Name </th>
                                    <th> Second Name </th>
                                    <th> Last Name </th>
                                    <th> Ava </th>
                                    <th> Last Visited </th>
                                    <th> Address </th>
                                    <th> Actions </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($client->id); ?></td>
                                    <td><?php echo e($client->first_name); ?></td>
                                    <td><?php echo e($client->second_name); ?></td>
                                    <td><?php echo e($client->last_name); ?></td>
                                    <td>
                                    <img class="img-fluid"
                                    src="/resources/media/images/<?php echo e($client->ava); ?>"
                                    alt="<?php echo e($client->ava); ?>"
                                    >
                                    </td>
                                    <td><?php echo e($client->visited_at); ?></td>
                                    <td><?php echo e($client->address); ?></td>
                                    <td>
                                    <a href="/user/view/<?php echo e($client->id); ?>"
                                    title="View"
                                    >
                                    <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="/user/edit/<?php echo e($client->id); ?>"
                                    title="Edit"
                                    >
                                    <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="/user/delete/<?php echo e($client->id); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv6\app\Views/admin/users_all.blade.php ENDPATH**/ ?>