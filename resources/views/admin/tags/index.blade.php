@extends('admin.layouts.primary')
@section('title', 'All Tags')

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
                                        <th>Name</th>
                                        <th>Created</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($tags as $key => $tag)
                                        <tr>
                                            <td>
                                                <a style="padding-left: 15px" href="/admin/tags/{{ $tag->id }}/edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <a style="padding-left: 15px" href="/admin/tags/{{ $tag->id }}/delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                {{ctb_paginate_page_totals($tags)}}
                            </div>
                            <div class="col-sm-6">
                                {{$tags->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection