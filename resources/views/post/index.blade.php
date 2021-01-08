@extends('admintemplate')
@section('backendcontent')


  <div class="container-fluid">

                  <!-- DataTales Example -->
          <div class="card shadow mb-4 my-5">
            <div class="card-header py-3">
              <h2 class="m-0 font-weight-bold text-primary">Post
                <a href="{{route('post.create')}}" class="btn btn-warning" style="float: right; margin-right: 50px;">Add Post</a>
            </div>
              <div>
            
          </h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align: center; font-weight: bold;">
                    <tr>
                      <th>No:</th>
                      <th>Name</th>
                      <th>Room No:</th>
                      <th>Time</th>
                      <th>Student Record</th>

                      <th colspan="3">Action</th>
                    </tr>
                  </thead>

                  @php 
                    $i=1;
                  @endphp
                  <tbody>
                    @foreach($posts as $row)
                    
                    <tr>
                      <td style="text-align: center;">{{$i++}}</td>
                      <td>{{$row->name}}</td>
                      <td style="text-align: center;">{{$row->room_no}}</td>
                      <td>{{$row->time}}</td>
                      <td>
                        <div>
                         <a href="{{route('record',$row->id)}}" class="btn btn-success">Record</a>
                        </div>
                      </td>

                        <td>
                        <div>
                         <a href="{{route('post.show',$row->id)}}" class="btn btn-primary">Detail</a>
                        </div>
                      </td>
                      <td>
                        <div>
                         <a href="{{route('post.edit',$row->id)}}" class="btn btn-info">Edit</a>
                        </div>
                      </td>
                      <td>
                          <div>
                              <form method="post" action="{{route('post.destroy',$row->id)}}" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                              </form>
                          </div>
                      </td>

                    </tr>
                    @endforeach
                    
                  </tbody>
                  <tfoot style="text-align: center; font-weight: bold;">
                   <tr>
                     <th>No:</th>
                      <th>Name</th>
                      <th>Room No:</th>
                     
                      <th>Time</th>
                      <th>Student Record</th>
                      <th colspan="3">Action</th>
                      
                    </tr>
                  </tfoot>
                  
                    
                  
                </table>          

                <div>
          
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>


  @endsection

  
