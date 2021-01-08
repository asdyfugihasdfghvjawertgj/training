@extends('admintemplate')
@section('backendcontent')


  <div class="container-fluid">

         
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4 my-5">
            <div class="card-header py-3">
              <h2 class="m-0 font-weight-bold text-primary">User List
            </div>
              <div>
            
          </h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align: center; font-weight: bold;">
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  @php 
                    $i=1;
                  @endphp
                  <tbody>
                    @foreach($users as $row)
                    
                    <tr>
                      <td style="text-align: center;">{{$i++}}</td>
                      <td style="text-align: center;">{{$row->name}}</td>
                      <td style="text-align: center;">{{$row->email}}</td>
                      <td style="text-align: center;">{{$row->DOB}}</td>
                      <td style="text-align: center;">{{$row->gender}}</td>
                      <td style="text-align: center;">{{$row->address}}</td>
                      <td style="text-align: center;">{{$row->phone_no}}</td>
                      <td>
                          <div>
                              <form method="post" action="{{route('user.destroy',$row->id)}}" >
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
                     <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Action</th>
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

  
