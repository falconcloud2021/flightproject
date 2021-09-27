<?php $__env->startSection('content'); ?>
       <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-60 text-thin text-line-height-1">User Panel</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              
              
              <!-- Contact Form -->
              <div class="s-12 m-12 l-12">
                <h2 class="text-uppercase text-strong margin-bottom-30">User Panel</h2>
                <form class="customform" method="post" action = "">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email border-radius" placeholder="Login" title="Login" type="text" />
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name border-radius" placeholder="Password" title="Password" type="password" />
                      </div>
                    </div>
                  
                  <div class="s-12 m-12 l-4"><button class="submit-form button background-primary border-radius text-white" type="submit">Войти</button></div> 
                </form>
              </div>  
            </div>  
          </div> 
        </div> 
      </article>
      
     
      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\yaroslav.locv6\app\Views/user/login.blade.php ENDPATH**/ ?>