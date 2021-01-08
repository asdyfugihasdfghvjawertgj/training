@extends('template')
@section('content') 

<style type="text/css">
  @font-face{
    src:url("{{asset('storage/fonts/os.ttf')}}");
    font-family: "aa";
  }

</style>
 
    <div class="container-fluid bg-light">
          <div class=" ">
            <div class="py-3">           
           <h2 class="font-weight-bold ml-5" style="font-family:'aa';">{{$post->name}}</h2>
            </div>

            <div class="row">

              <div class="col-lg-6">
                  <img src="{{asset($post->image)}}" class="img-fluid d-block ml-5" style="width: 500px; height: 500px;">
                  <h5 class="ml-5">Course Description</h5>
                  <p class="ml-5">{{$post->description}}</p>

              </div>
                <div class="col-lg-6 mx-auto">
                  <div class="card mr-5 text-center">
                    <h4 class="mt-4">Training Course Information</h4>
                  <ul class="list-unstyled ml-5 mt-3">
                    <li><strong>Price:</strong> &nbsp {{$post->price}}(kyats) </li><br>
                    <li><strong>Times:</strong> &nbsp {{$post->time}}</li><br>
                    <li><strong>Room-No:</strong> &nbsp {{$post->room_no}}</li><br>
                    <li><strong>Started_date:</strong> &nbsp {{$post->start_date}}</li><br>
                    <li><strong>End_date:</strong> &nbsp {{$post->end_date}}</li>
                  </ul>
                </div>
                <div class="card-footer">
                  @if(isset($registercount) && $registercount>0)
                  <button class="btn btn-primary">You have already registered this course</button>
                  @else
                  <form method="post" action="{{route('record.store')}}" >
                    @csrf
                    <input type="hidden" name="register" value="{{$post->id}}">
                    @hasrole('user')
                    <input type="submit" class="btn btn-primary" value="Register">
                    @endhasrole                      
                  </form>
                  @endif
                </div>
                  
              </div>
              
                
            </div>
          </div>

  </div>     
  @endsection
  