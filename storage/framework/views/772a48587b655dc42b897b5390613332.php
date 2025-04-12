 <?php $__env->startSection('css'); ?>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
 <?php $__env->stopSection(); ?>
 
 <?php $__env->startSection('content'); ?>
 <section id="main-content" style="min-height: 700px;">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
               <div class="col-sm-6">
                <h6>Task by status</h6>
                <form action="<?php echo e(route('task.index')); ?>" method="GET">
                  <select class="form-control" name="status">
                      <option value="">All</option>
                      <option value="Pending"<?php echo e(($status=='Pending')?'selected':''); ?>>Pending</option>
                      <option value="In-Progress"
                      <?php echo e(($status=='In-Progress')?'selected':''); ?>>In Progress</option>
                      <option value="Complete"
                      <?php echo e(($status=='Complete')?'selected':''); ?>>Complete</option>
                  </select>
                  <input type="submit" value="Search" class="btn btn-primary" 
                  style="margin-top: 10px;">
                  </form>
              </div><br>
                   <a href="<?php echo e(route('task.create')); ?>"  class="btn btn-primary"  style="margin-top: 15px;">Add </a>
                      <div class="content-panel">
                        
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed" id="tasktable">
                              <thead>
                               <tr>
                                  <th>Sno</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Status</th>
                                  <th>Action</th>
                               </tr>
                            </thead>
                      <tbody>
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($index+1); ?></td>
                            <td><?php echo e($task->title); ?></td>
                            <td><?php echo e($task->description); ?></td>
                            <td><?php echo e($task->status); ?></td>
                            <td>
                                <a href="<?php echo e(route('task.show',$task->id)); ?>" class="btn btn-success btn-sm ">View </a>
                                <a href="<?php echo e(route('task.edit',$task->id)); ?>" class="btn btn-primary btn-sm ">Edit </a>
                                <form method="POST" action="<?php echo e(route('task.delete', $task->id)); ?>">
                                       <?php echo csrf_field(); ?>
                                      <input name="_method" type="hidden" value="DELETE">
                                     <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </td>  
                               </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
     $('#tasktable').DataTable();
  });


   $('.show_confirm').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
              title: `Are you sure you want to delete this record?`,
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })

          .then((willDelete) => {
             if (willDelete) {
               form.submit();
              }
           });
         });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.2\htdocs\taskfromcompany\apiproject\resources\views/task/index.blade.php ENDPATH**/ ?>