@extends ('layouts.master')

@section ('content')
<!-- Slider -->
	<section class="container-fluid">
		<div class="row slider">
			<span class="col-sm-4">
				<img src="http://cdni.condenast.co.uk/1080x720/a_c/bica-cable-car-bairro-alto-lisbon-portugal-conde-nast-traveller-18dec15-getty_1080x720.jpg" class="img-fluid" alt="Responsive image">
				<p class="slider-city">Lisbon</p>
			</span>
			<span class="col-sm-4" style="border-right: none; border-left: none">
				<img src="https://www.nomadasaurus.com/wp-content/uploads/2016/09/Red-Roofs-What-To-Do-In-Prague.jpg" class="img-fluid" alt="Responsive image">
				<p class="slider-city">Prague</p>
			</span>
			<span class="col-sm-4">
				<img src="http://farm1.staticflickr.com/332/32326610241_c92ed47fed_c.jpg" class="img-fluid" alt="Responsive image">
				<p class="slider-city">Bucharest</p>
			</span>
		</div>
	</section>

<!-- Nessie Greeting -->
	<section class="container-fluid">
		<div class="row intro-text">
			<p class="col-sm-12" align="center">Come with us! As me "Nessie", and my acquaintance Mozzie travel the world with <br> our enslaved humans to the far reaching corners of the globe.</p>
		</div>
	</section> 

<!-- Posts -->
	<section class="container-fluid"> 
		<div class="row justify-content-center">

			@foreach ($posts as $key => $post)
				@if ($key % 2 == 1)
					@include ('posts.post-odd')
				@elseif ($key % 2 == 0)
					@include ('posts.post-even')
				@endif		
			@endforeach

		</div>
	</section>

@endsection