@extends('admin.layouts.primary')
@section('title', 'All Posts')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hover Data Table</h3>
                </div>
                <div class="box-body">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover dataTable" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th>Action</th>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td>
                                                <a style="padding-left: 15px" href="/admin/posts/{{ $post->id }}"><i class="fa fa-eye"></i></a>
                                                <a style="padding-left: 15px" href="/admin/posts/{{ $post->id }}/edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <a style="padding-left: 15px" href="/admin/posts/{{ $post->id }}/delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td><span class="label label-success">Published</span></td>
                                            <td>{{ $post->created_at->toFormattedDateString() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                {{ctb_paginate_page_totals($posts)}}
                            </div>
                            <div class="col-sm-6">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--<div class="box">--}}
                {{--<div class="box-header">--}}
                    {{--<h3 class="box-title">Example Table</h3>--}}

                    {{--<div class="box-tools">--}}
                        {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                            {{--<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">--}}

                            {{--<div class="input-group-btn">--}}
                                {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="box-body table-responsive no-padding">--}}
                    {{--<table class="table table-hover">--}}
                        {{--<tbody><tr>--}}
                            {{--<th>ID</th>--}}
                            {{--<th>Title</th>--}}
                            {{--<th>Author</th>--}}
                            {{--<th>Status</th>--}}
                            {{--<th>Date</th>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>183</td>--}}
                            {{--<td>John Doe</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-success">Approved</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>219</td>--}}
                            {{--<td>Alexander Pierce</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-warning">Pending</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>657</td>--}}
                            {{--<td>Bob Doe</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-primary">Draft</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>175</td>--}}
                            {{--<td>Mike Doe</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-danger">Deactivated</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
@endsection