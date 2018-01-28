@extends ('layouts.master')

@section ('content')
	<div class="col-md-8">
		<h2>Sign In</h2>
		<form method="POST" action="/login">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-secondary btn-lg">Sign In</button>
			</div>

			<div>
				<a href="/register">Register</a>
			</div>

			@include ('partials.errors')
		</form>
	</div>
@endsection