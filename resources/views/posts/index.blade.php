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
				<img src="https://www.st-christophers.co.uk/__data/assets/image/0005/462614/prague_hero.jpg" class="img-fluid" alt="Responsive image">
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

	<section class="container-fluid posts"> 
		<div class="row justify-content-center">
			@foreach ($posts as $post)
				@include ('posts.post')
			@endforeach
		</div>
	</section>

@endsection