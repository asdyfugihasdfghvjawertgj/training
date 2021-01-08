@extends ('template')

@section('content')
<style type="text/css">
  @font-face{
    src:url("{{asset('storage/fonts/os.ttf')}}");
    font-family: "aa";
  }

</style>
  <section class="bg-light mt-3 mx-3 mb-5 ">
      <h1 style="font-family:'aa';" class="text-center">Semicolon Training Center</h1>
        <div class="">
          <h4 style="font-family:'aa';" class="text-center">Join Our Training Center & Explore New Opportunities</h4>
              <p style="font-family:'aa';" class="text-center">Work smarter, not harder
              <br>
              Document best practices and company-specific procedures
              <br>
              Create custom learning paths</p>
        </div>
  </section>
      <div class="container">
    <!-- /.row -->

       <div class="row">
          @foreach ($posts as $row)
            <div class="col-md-4 mb-5">
              <div class="card h-100">
                <img class="card-img-top " style="width:350px; height: 200px;"  src="{{$row->image}}"alt="">
                <div class="card-body">
                  <h4 class="card-title">{{$row->name}}</h4>
                  <p class="card-text"></p>
                </div>
                <div class="card-footer">
                  <a href="{{route('frontpage.show',$row->id)}}" class="btn btn-primary w-50" style="float: right;">Detail</a>                  
                </div>
              </div>
            </div>
          @endforeach
          </div> 
    <!-- /.row -->
      </div>

  

  

  @endsection