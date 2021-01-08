@extends ('template')

@section ('content')
<style type="text/css">
  @font-face{
    src:url("{{asset('storage/fonts/os.ttf')}}");
    font-family: "aa";
  }

</style>
	<section>
		<div class="container">
			<h2 class="text-center py-5" style="font-family: 'aa'">About Our Training Center</h2>
				<p class=" text-center">Est 2017,I have been providing my clients with quality photography and retouching serviceSome of my works were award on a national level.Below are some facts about me.</p>
			<div class="row my-5">
				
				<div class="col-sm-6 col-md-3">
					<i class="fas fa-award fa-3x px-5"></i>
					<h3 class="px-5 py-4 ml-2">7</h3>
					<h5 class="ml-auto">Best Training Center</h5>
				</div>
				<div class="col-sm-6 col-md-3">
					<i class="fas fa-plane-departure fa-3x px-4"></i>
					<h3 class="px-4 py-4 px-5">5</h3>
					<h5 class="ml-auto">Oversea Trips</h5>
				</div>
				<div class="col-sm-6 col-md-3">
					<i class="fas fa-building px-5 fa-3x"></i>
					<h3 class="px-5 py-4 ml-3">7</h>
					<h5 class="px-3">Since 2012</h5>
				</div>
				<div class="col-sm-6 col-md-3">
					<i class="far fa-address-book fa-3x px-5"></i>
					<h3 class="px-5 py-4">500+</h3>
					<h5>Certificated Students</h5>
				</div>
			</div>
		</div>
	</section>
	<section class="">
	<div class="container py-3">
		<div class="card ">
  			<div class="row">
    			<div class="col-md-4">
      				<img src="{{asset('storage/images/u.jpg')}}" class="card-img">
    			</div>
   					 <div class="col-md-8">
      					<div class="card-body">
        					<h3 class="card-title">Franz:</h3>
        					<p class="card-text">Franz started his career as a photojournalist and documentary filmmaker. He has won international awards for my documentary films and photos. He has been capturing wedding photography for many years. He enjoys taking photos that capture the right moment for a lifetime of shared memories.
        					<br><br>
							
      					</div>
    				</div>
  			</div>
		</div>
	</div> 
</section>

	
	
@endsection