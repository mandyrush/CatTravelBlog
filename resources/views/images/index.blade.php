@extends ('layouts.master')

@section ('content')
	
	<section class="container-fluid">
		<div class="row slider">
			<span class="col-sm-4">
				<img src="http://cdni.condenast.co.uk/1080x720/a_c/bica-cable-car-bairro-alto-lisbon-portugal-conde-nast-traveller-18dec15-getty_1080x720.jpg" class="img-fluid" alt="Responsive image">

				<a href="/images/tags/{{ $tags[1]['name'] }}" class="slider-city">
					{{ $tags[1]['name'] }}
				</a>

			</span>
			<span class="col-sm-4" style="border-right: none; border-left: none">
				<img src="https://www.nomadasaurus.com/wp-content/uploads/2016/09/Red-Roofs-What-To-Do-In-Prague.jpg" class="img-fluid" alt="Responsive image">

				<a href="/images/tags/{{ $tags[2]['name'] }}" class="slider-city">
					{{ $tags[2]['name'] }}
				</a>

			</span>
			<span class="col-sm-4">
				<img src="http://farm1.staticflickr.com/332/32326610241_c92ed47fed_c.jpg" class="img-fluid" alt="Responsive image">
				
				<a href="/images/tags/{{ $tags[0]['name'] }}" class="slider-city">
					{{ $tags[0]['name'] }}
				</a>

			</span>
		</div>
	</section>
	
@endsection
