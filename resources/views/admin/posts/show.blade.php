@extends('admin.layouts.primary')
@section('title', 'Post')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-sm-8">
                        <h1 style="margin-bottom:50px">View Post</h1>

                        {{--<form method="POST" action="/posts" enctype="multipart/form-data">--}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title:</label>
                            {{ $post->title }}
                        </div>

                        <div class="form-group">
                            <label for="body">Body:</label>
                            {{ $post->body }}
                        </div>

                        <div class="form-group">
                            <label for="featured_text">Featured Text:</label>
                            {{ $post->featured_text }}
                        </div>

                        <div class="form-group">
                            <img class="img-fluid" src="{{Storage::disk('local')->url( $post->featured_photo )}}" alt="Responsive image">
                        </div>

                        <div class="form-group">
                            <label>Written By:</label>
                            {{ $post->user->name }}
                        </div>

                        <div class="form-group">
                            <label>Created:</label>
                            {{ $post->created_at->toFormattedDateString() }}
                        </div>

                        {{--@include ('partials.errors')--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection