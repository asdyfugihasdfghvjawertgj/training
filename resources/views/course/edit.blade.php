@extends('admintemplate')
@section('backendcontent')


<div class="container-fluid">

  	  <!-- DataTales Example -->
	<div class="card shadow mb-4">
	   	<div class="card-header py-3">
	      <h2 class="m-0 font-weight-bold text-primary">Edit Course Form</h2>
        </div>
        <div class="card-body">
<div class="container">
	<div class="col-lg-12 col-md-12 mx-auto my-5">
		
		<form method="post" action="{{route('course.update',$course->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$course->name}}">
			</div><br>
			<div class="form-group">
				<input type="submit" name="btn" value="save" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>


</div>
    </div>
</div>
@endsection
