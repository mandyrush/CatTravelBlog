@extends('admin.layouts.primary')
@section('title', 'Create Tag')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-sm-5">
                        <h1 style="margin-bottom:50px">Create a Tag</h1>
                        <form method="POST" action="/admin/tags" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Tag Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>

                            {{--@include ('partials.errors')--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection