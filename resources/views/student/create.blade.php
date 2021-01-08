@extends('template')

@section('content')

 <div class="container py-5">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Student Information Form</h1>
      	
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="container">
       <form method="post" action="{{route('student.store')}}" enctype="multipart/form-data">
   



        @csrf
         <div class="form-group">
          <label>Date of Birth:</label>
         <input type="date" name="dob" class="form-control">
        </div>
        <div>
          <label>Gender:</label><br>
          <input type="radio" name="gender" value="male">&nbsp;Male&nbsp;
          <input type="radio" name="gender" value="female">&nbsp;Female
        </div>
        <div class="form-group">
          <label>Address:</label>
          <textarea name="address" class="form-control"></textarea>
        </div>        
        <div class="form-group">
          <label>Phone NO:</label>
         <input type="string" name="phone_no" class="form-control">
        </div>
        <div>
          <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
        </div>
       </form>
     </div>
      </div>
    </div>
  </div>

@endsection