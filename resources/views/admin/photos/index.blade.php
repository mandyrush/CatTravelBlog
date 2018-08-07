@extends('admin.layouts.primary')
@section('title', 'All Photos')

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
                                        <th></th>
                                        <th>Name</th>
                                        <th>Created</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($photos as $key => $photo)
                                        <tr>
                                            <td>
                                                <a style="padding-left: 15px" href="/admin/photos/{{ $photo->id }}"><i class="fa fa-eye"></i></a>
                                                <a style="padding-left: 15px" href="/admin/photos/{{ $photo->id }}/edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <a style="padding-left: 15px" href="/admin/photos/{{ $photo->id }}/delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td>{{ $photo->id }}</td>
                                            <td>
                                                <img style="width: 80px;" src="{{Storage::disk('s3')->url($photo->featured_photo)}}" class="img-fluid" alt="Responsive image">
                                            </td>
                                            <td>{{ $photo->featured_photo }}</td>
                                            <td>{{ $photo->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                {{ctb_paginate_page_totals($photos)}}
                            </div>
                            <div class="col-sm-6">
                                {{ $photos->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection