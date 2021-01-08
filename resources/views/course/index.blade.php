  @extends('admintemplate')
@section('backendcontent')


  <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4 my-5 ">
            <div class="card-header py-3">
              <h2 class="font-weight-bold text-primary">Courses 
           <a href="{{route('course.create')}}" 
           class="btn btn-warning" style="float: right; margin-right: 50px;">Add Course</a>
        </h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align: center; font-weight: bold;">
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
                  </tr>
                  </thead>

                  @php 
                    $i=1;
                  @endphp
                  <tbody>
                     @php
                $i=1;
              @endphp

              @foreach($courses as $row)
              <tr>
                <td style="text-align: center;">{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td style="text-align: center;"><a href="{{route('course.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                <td style="text-align: center;">
                  <form method="post" action="{{route('course.destroy',$row->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </td>
              </tr>
              @endforeach
                    
                  </tbody>
                  
                  
                    
                  
                </table>

         
          
          

                <div>
          
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>



  

  @endsection
      
  