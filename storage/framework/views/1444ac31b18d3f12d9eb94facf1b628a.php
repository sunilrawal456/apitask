  <!--sidebar start-->
<aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
            
            	  <p class="centered"><a href="#"><img src="<?php echo e(URL::asset('img/ui-sam.jpg')); ?>" class="img-circle" width="60"></a></p>
            	  <h5 class="centered"><?php echo e(Auth::User()->name); ?></h5>
               	<?php if(Auth::User()): ?>	
                <li class="mt">
                    <a class="active" href="<?php echo e(route('dashboard')); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Task</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="<?php echo e(route('task.create')); ?>">Create Task</a></li>
                        <li><a  href="<?php echo e(route('task.index')); ?>">Task List</a></li>
                      </ul>
                      
                </li>
              <?php endif; ?>
           </ul>
            <!-- sidebar menu end-->
      </div>
</aside>
<!--sidebar end--><?php /**PATH C:\xampp8.2\htdocs\taskfromcompany\apiproject\resources\views/template/include/sidebar.blade.php ENDPATH**/ ?>