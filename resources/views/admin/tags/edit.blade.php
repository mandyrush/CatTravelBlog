@extends('admin.layouts.primary')
@section('title', 'Edit Tag')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-sm-8">
                        <h1 style="margin-bottom:50px">Edit Tag</h1>

                        <form method="POST" action="/tags" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Tag Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                            {{--@include ('partials.errors')--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection