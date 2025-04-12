 
 <?php $__env->startSection('content'); ?>
<section id="main-content" style="min-height: 800px;">
<section class="wrapper">
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                <a href="<?php echo e(route('task.index')); ?>"  class="btn btn-primary" >Task List </a>
                  <div class="form-panel">
                  	 <form class="form-horizontal style-form">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">
                              Title</label>
                              <div class="col-sm-10">
                               <input type="text" name="title" value="<?php echo e($task->title); ?>" class="form-control" readonly>
                             </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-10">
                                  <input type="text" value="<?php echo e($task->description); ?>" name="description" class="form-control" readonly>
                              </div>
                            
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                 <select class="form-control" name="status">
                                      <option value="">Select</option>
                                      <option value="Pending" <?php echo e(($task->status =='Pending')?'selected':''); ?> >Pending</option>
                                      <option value="In-Progress"
                                      <?php echo e(($task->status =='In-Progress')?'selected':''); ?>>In Progress</option>
                                      <option value="Complete"
                                     <?php echo e(($task->status =='Complete')?'selected':''); ?> >Complete</option>
                                 </select>
                              </div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          <!-- INLINE FORM ELELEMNTS -->      	
</section>
</section><!-- /MAIN CONTENT -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.2\htdocs\taskfromcompany\apiproject\resources\views/task/show.blade.php ENDPATH**/ ?>