 @extends('template.layout.app')
 @section('content')
<section id="main-content" style="min-height: 800px;">
<section class="wrapper">
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                <a href="{{route('task.index')}}"  class="btn btn-primary" >Task List </a>
                  <div class="form-panel">
                  	 <form class="form-horizontal style-form">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">
                              Title</label>
                              <div class="col-sm-10">
                               <input type="text" name="title" value="{{$task->title}}" class="form-control" readonly>
                             </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-10">
                                  <input type="text" value="{{$task->description}}" name="description" class="form-control" readonly>
                              </div>
                            
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                 <select class="form-control" name="status">
                                      <option value="">Select</option>
                                      <option value="Pending" {{ ($task->status =='Pending')?'selected':''}} >Pending</option>
                                      <option value="In-Progress"
                                      {{ ($task->status =='In-Progress')?'selected':''}}>In Progress</option>
                                      <option value="Complete"
                                     {{ ($task->status =='Complete')?'selected':''}} >Complete</option>
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
@endsection