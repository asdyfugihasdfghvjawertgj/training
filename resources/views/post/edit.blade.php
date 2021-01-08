@extends('admintemplate')
@section('backendcontent')

 <div class="container-fluid">

  	  <!-- DataTales Example -->
	<div class="card shadow mb-4">
	   	<div class="card-header py-3">
	      <h2 class="m-0 font-weight-bold text-primary">Edit Post Form</h2>
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


				<form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					

					<div class="form-group">
						<label>Name</label><input type="text" name="name" class="form-control" value="{{$post->name}}">
					</div><br>

					<div class="form-group">
						<label>Course</label>
							<select name="course" class="form-control">
								<option value="">Choose Course</option>
								@foreach($courses as $row)
								<option value="{{$row->id}}"
									@if($row->id==$post->course_id){{'selected'}}@endif>{{$row->name}}
								</option>			
								@endforeach
							</select>
					</div><br>

					<div class="form-group">
						<label>Price</label><input type="text" name="price" value="{{$post->price}}" class="form-control">
					</div><br>

					<div class="form-group">
						<label>Time</label><input type="text" name="time" value="{{$post->time}}" class="form-control">
					</div><br>

					<div class="form-group">
						<label>Room No:</label><input type="text" value="{{$post->room_no}}" name="room" class="form-control">
					</div><br>

					<div class="form-group">
						<label>Photo</label>
						<input type="file" name="photo" class="form-control"><img src="{{asset($post->image)}}" class="img-fluid w-25">
						<input type="hidden" name="oldphoto" value="{{$post->image}}">
					</div><br>

					<div class="form-group">
						<label>Start Date</label><input type="Date" value="{{$post->start_date}}"name="start_date" class="form-control">
					</div><br>

					<div class="form-group">
						<label>End Date</label><input type="Date" value="{{$post->end_date}}" name="end_date" class="form-control">
					</div><br>

					<div class="form-group">
						<label>Description</label><textarea name="description" value="" class="form-control">{{$post->description}}</textarea>
					</div><br>

					<div class="form-group">
						<input type="submit" name="btnsubmit" value="save" class="btn btn-primary from-control">
					</div>

				</form>
			</div>
             
        </div>
    </div>
</div>


@endsection



