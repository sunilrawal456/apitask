 
 <?php $__env->startSection('content'); ?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper" style="min-height: 800px;">
            <div class="row">
                  <div class="col-lg-9 main-chart">
                     <div class="row mtbox">
                      <a href="<?php echo e(route('task.index')); ?>">
                      	 	<div class="col-md-2 col-sm-2 box0">
                        			<div class="box1">
              					  			<span class="li_cloud"></span>
              					  			<h3>Tasks</h3>
                              </div>
            					  			
                      		</div>
                        </a>
                     </div><!-- /row mt -->	
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
             </div>
        </section>
  </section>
 <!--main content end-->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.2\htdocs\taskfromcompany\apiproject\resources\views/dashboard.blade.php ENDPATH**/ ?>