 @section('css')
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
 @endsection
 @extends('template.layout.app')
 @section('content')
 <section id="main-content" style="min-height: 700px;">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
               <div class="col-sm-6">
                <h6>Task by status</h6>
                <form action="{{route('task.index')}}" method="GET">
                  <select class="form-control" name="status">
                      <option value="">All</option>
                      <option value="Pending"{{($status=='Pending')?'selected':''}}>Pending</option>
                      <option value="In-Progress"
                      {{($status=='In-Progress')?'selected':''}}>In Progress</option>
                      <option value="Complete"
                      {{($status=='Complete')?'selected':''}}>Complete</option>
                  </select>
                  <input type="submit" value="Search" class="btn btn-primary" 
                  style="margin-top: 10px;">
                  </form>
              </div><br>
                   <a href="{{route('task.create')}}"  class="btn btn-primary"  style="margin-top: 15px;">Add </a>
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
                        @foreach($tasks as $index =>$task)
                          <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$task->title}}</td>
                            <td>{{$task->description}}</td>
                            <td>{{$task->status}}</td>
                            <td>
                                <a href="{{route('task.show',$task->id)}}" class="btn btn-success btn-sm ">View </a>
                                <a href="{{route('task.edit',$task->id)}}" class="btn btn-primary btn-sm ">Edit </a>
                                <form method="POST" action="{{ route('task.delete', $task->id) }}">
                                       @csrf
                                      <input name="_method" type="hidden" value="DELETE">
                                     <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </td>  
                               </tr>
                                @endforeach
                        </tbody>
                      </table>
                    </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@endsection
@section('script')
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
@endsection