@extends ('layouts.master')

@section ('content')
	<h2>Gallery Home Page</h2>
	@foreach ($galleries as $gallery)
		<img src="{{Storage::disk('local')->url( $gallery->featured_image )}}" class="img-fluid" alt="Responsive image">
	@endforeach
@endsection