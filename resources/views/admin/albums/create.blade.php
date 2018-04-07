@extends('admin.layouts.primary')
@section('title', 'Create Tag')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-sm-5">
                        <h1 style="margin-bottom:50px">Create a New Album</h1>
                        <form method="POST" action="/admin/albums" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Album Name:</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="featured_photo">Cover Photo:</label>
                                <input type="file" name="cover_photo" id="cover_photo" />
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>

                            @include ('partials.errors')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection