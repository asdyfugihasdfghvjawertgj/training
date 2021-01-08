@extends('admintemplate')
@section('backendcontent')



  <div class="container">

          <!-- Page Heading -->
         
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4 my-5 ">
            <div class="card-header py-3">           
          
               <h2 class="m-0 font-weight-bold text-primary">{{$post->name}}
                <form method="post" action="{{route('post.destroy',$post->id)}}"
                       style="float:right;margin-right:  20px;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger mx-auto" value="Delete">
                </form>
                <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning" style="float: right; margin-right: 20px;">Edit</a>
              </h2>
            </div>

            <div class="row"style="margin-left: 50px;">
                <div class="col-md-6 my-4">
                    <div class="row">                            
                      <div class="col-sm-6">
                        <strong class="text-uppercase">Price:</strong>
                      </div>
                      <div class="col-sm-6">{{$post->price}}(kyats)</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6"><strong class="text-uppercase">Time:</strong></div>
                        <div class="col-sm-6">{{$post->time}}</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6"><strong class="text-uppercase">Room No:</strong></div>
                        <div class="col-sm-6">{{$post->room_no}}</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6"><strong class="text-uppercase">Started_date:</strong></div>
                        <div class="col-sm-6">{{$post->start_date}}</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6"><strong class="text-uppercase">End_date:</strong></div>
                        <div class="col-sm-6">{{$post->end_date}}</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6"><strong class="text-uppercase">Description:</strong></div>
                        <div class="col-sm-6">{{$post->description}}</div>
                    </div>
                </div>
              
                <div class="col-md-6 order-1 order-md-2 my-4"style="float: left;">
                  <img src="{{asset($post->image)}}" class="img-fluid d-block mx-auto"style="width: 350px; height: 254px; ">
                </div>
            </div>
          </div>

  </div>
        <!-- /.container-fluid -->

      


  

  


  @endsection
  