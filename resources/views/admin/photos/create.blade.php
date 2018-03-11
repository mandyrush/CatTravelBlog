@extends('admin.layouts.primary')
@section('title', 'Upload Photo')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-sm-5">
                        <h1 style="margin-bottom:50px">Upload Photo</h1>
                        <form method="POST" action="/admin/photos" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="featured_photo">Select Photo to Upload:</label>
                                <input type="file" name="featured_photo[]" multiple="multiple" id="featured_photo" />
                            </div>

                            <select class="form-group custom-select" name="tag">
                                <option selected>Select Tag</option>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>

                            {{--@include ('partials.errors')--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection