 @extends('admintemplate')
@section('backendcontent')

 <div class="container-fluid">

  	  <!-- DataTales Example -->
	<div class="card shadow mb-4">
	   	<div class="card-header py-3">
	      <h2 class="m-0 font-weight-bold text-primary">Course Create Form</h2>
        </div>
        <div class="card-body">

<div class="container col-md-12 mx-auto py-5" >
	


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 					


	<form method="post" action="{{route('course.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label><input type="text" name="name" class="form-control" required="required">			
		</div>	<br>
		<div class=" form-group">
			<input type="submit" name="btnsubmit" value="save" class="btn btn-primary">
		</div>

	</form>
	

</div>

</div>
    </div>
</div>
@endsection


