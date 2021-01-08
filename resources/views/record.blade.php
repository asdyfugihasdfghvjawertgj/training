@extends ('admintemplate')

@section ('backendcontent')

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h2 class="m-0 font-weight-bold text-primary">Register List</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Course</th>
                      <th>Register Date</th>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Course</th>
                      <th>Register Date</th>
                  </tfoot>
                  <tbody>
                    @php
                    $i=1;
                    @endphp   
                  	@foreach($registers as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$row->username}}</td>
                      <td>{{$row->postname}}</td>
                      <td>{{$row->date}}</td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->



@endsection