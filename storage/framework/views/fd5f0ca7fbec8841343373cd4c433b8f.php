 
 <?php $__env->startSection('content'); ?>
<section id="main-content" style="min-height: 800px;">
<section class="wrapper">
          <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	 <form class="form-horizontal style-form" method="POST" action="<?php echo e(route('task.store')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">
                              Title</label>
                              <div class="col-sm-10">
                               <input type="text" name="title" class="form-control" value="<?php echo e(old('title')); ?>">
                             </div>
                             <?php if($errors->has('title')): ?>
                             <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                             <?php endif; ?>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-10">
                                  <input type="text" name="description" class="form-control" value="<?php echo e(old('description')); ?>">
                              </div>
                            <?php if($errors->has('description')): ?>
                             <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                             <?php endif; ?>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                 <select class="form-control" name="status">
                                      <option value="">Select</option>
                                      <option value="Pending" <?php echo e(old('status') == 'Pending' ? 'selected' : ''); ?>>Pending</option>
                                    <option value="In-Progress"
                                  <?php echo e(old('status') == 'In-Progress' ? 'selected' : ''); ?>    >In Progress</option>
                                      <option value="Complete"
                                     <?php echo e(old('status') == 'Complete' ? 'selected' : ''); ?> >Complete</option>
                                 </select>
                              </div>

                              <?php if($errors->has('status')): ?>
                               <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                               <?php endif; ?>
                          </div>
                          <input type="submit">
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          <!-- INLINE FORM ELELEMNTS -->      	
</section>
</section><!-- /MAIN CONTENT -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.2\htdocs\taskfromcompany\apiproject\resources\views/task/create.blade.php ENDPATH**/ ?>