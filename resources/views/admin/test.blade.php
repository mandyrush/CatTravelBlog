@extends('admin.layouts.primary')
@section('title', 'Just Testing')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <a href="/articles/create" class="btn-sm btn-primary">Add Article</a>
                    <div class="box-tools">
                        {{--{!! $articles->render() !!}--}}
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        {{--@foreach($articles as $article)--}}
                            {{--<tr>--}}
                                {{--<td>{{ $article->id }}</td>--}}
                                {{--<td>{{ $article->title }}</td>--}}
                                {{--<td>--}}
                                    {{--@if ($article->active)<span class="label label-success">Active</span>@endif--}}
                                    {{--@if ($article->featured)<span class="label label-success">Featured</span>@endif--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<a href="/articles/{{ $article->id }}" class="btn-sm btn-default">View</a>--}}
                                    {{--<a href="/articles/{{ $article->id }}/edit" class="btn-sm btn-default">Edit</a>--}}
                                    {{--<a href="/articles/{{ $article->id }}/delete" class="btn-sm btn-default">Delete</a>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
    {{--<div class='row'>--}}
        {{--<div class='col-md-6'>--}}
            {{--<!-- Box -->--}}
            {{--<div class="box box-primary">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Randomly Generated Tasks</h3>--}}
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>--}}
                        {{--<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--@foreach($tasks as $task)--}}
                        {{--<h5>--}}
                            {{--{{ $task['name'] }}--}}
                            {{--<small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}%</small>--}}
                        {{--</h5>--}}
                        {{--<div class="progress progress-xxs">--}}
                            {{--<div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}

                {{--</div><!-- /.box-body -->--}}
                {{--<div class="box-footer">--}}
                    {{--<form action='#'>--}}
                        {{--<input type='text' placeholder='New task' class='form-control input-sm' />--}}
                    {{--</form>--}}
                {{--</div><!-- /.box-footer-->--}}
            {{--</div><!-- /.box -->--}}
        {{--</div><!-- /.col -->--}}
        {{--<div class='col-md-6'>--}}
            {{--<!-- Box -->--}}
            {{--<div class="box box-primary">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Second Box</h3>--}}
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>--}}
                        {{--<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--A separate section to add any kind of widget. Feel free--}}
                    {{--to explore all of AdminLTE widgets by visiting the demo page--}}
                    {{--on <a href="https://almsaeedstudio.com">Almsaeed Studio</a>.--}}
                {{--</div><!-- /.box-body -->--}}
            {{--</div><!-- /.box -->--}}
        {{--</div><!-- /.col -->--}}

    {{--</div><!-- /.row -->--}}
@endsection