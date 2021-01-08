@extends('template')
@section('content')

<style type="text/css">
  @font-face{
    src:url("{{asset('storage/fonts/os.ttf')}}");
    font-family: "aa";
  }

</style>

<div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h2 class="m-0 font-weight-bold" style="font-family:'aa';">History</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Post Name</th>
                      <th>Price</th>
                      <th>Time</th>
                      <th>Room-No</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Post Name</th>
                      <th>Price</th>
                      <th>Time</th>
                      <th>Room-No</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php
                    $i=1;
                    @endphp   
                  	@foreach($history as $post)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$post->name}}</td>
                      <td>{{$post->price}}</td>
                      <td>{{$post->time}}</td>
                      <td>{{$post->room_no}}</td>
                      <td>{{$post->start_date}}</td>
                      <td>{{$post->end_date}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>


@endsection