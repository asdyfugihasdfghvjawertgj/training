@extends('admintemplate')
@section('backendcontent')


 <div class="container-fluid">

  	  <!-- DataTales Example -->
	<div class="card shadow mb-4">
	   	<div class="card-header py-3">
	      <h2 class="m-0 font-weight-bold text-primary">Post Create Form</h2>
        </div>
        <div class="card-body">
			<div class="container col-md-12 mx-auto py-3" >
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif 					

				<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
					@csrf
					

					<div class="form-group">
						<label>Name</label><input type="text" name="name" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label>Course</label>
							<select name="course" class="form-control" >
								<option value="" selected="selected">Choose Course</option>
								@foreach($courses as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>			
								@endforeach
							</select>
					</div>

					<div class="form-group">
						<label>Price</label><input type="text" name="price" class="form-control"required="required">
					</div>

					<div class="form-group">
						<label>Time</label><input type="text" name="time" class="form-control"required="required">
					</div>

					<div class="form-group">
						<label>Room No:</label><input type="text" name="room" class="form-control"required="required">
					</div>

					<div class="form-group">
						<label>Photo</label>
						<input type="file" name="photo" class="form-control"required="required">
					</div>

					<div class="form-group">
						<label>Start Date</label><input type="Date" name="start_date" class="form-control"required="required">
					</div>

					<div class="form-group">
						<label>End Date</label><input type="Date" name="end_date" class="form-control"required="required">
					</div>

					<div class="form-group">
						<label>Description</label><textarea name="description" class="form-control" required="required"></textarea>
					</div>

					<div class=" form-group" >
						<input type="submit" name="btnsubmit" value="save" class="btn btn-primary mx-auto from-control">
					</div>

				</form>	

			</div>              
        </div>
    </div>
</div>



  @endsection

  




