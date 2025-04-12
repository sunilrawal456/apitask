  <!--sidebar start-->
<aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
            
            	  <p class="centered"><a href="#"><img src="{{URL::asset('img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
            	  <h5 class="centered">{{Auth::User()->name}}</h5>
               	@if(Auth::User())	
                <li class="mt">
                    <a class="active" href="{{route('dashboard')}}">
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
                        <li><a  href="{{route('task.create')}}">Create Task</a></li>
                        <li><a  href="{{route('task.index')}}">Task List</a></li>
                      </ul>
                      
                </li>
              @endif
           </ul>
            <!-- sidebar menu end-->
      </div>
</aside>
<!--sidebar end-->