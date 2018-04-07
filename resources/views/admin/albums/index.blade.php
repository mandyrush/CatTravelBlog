@extends('admin.layouts.primary')
@section('title', 'All Albums')

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
                                        <th>Cover Photo</th>
                                        <th>Path</th>
                                        <th>Created</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($albums as $key => $album)
                                        <tr>
                                            <td>
                                                <a style="padding-left: 15px" href="/admin/albums/{{ $album->id }}"><i class="fa fa-eye"></i></a>
                                                <a style="padding-left: 15px" href="/admin/albums/{{ $album->id }}/edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <a style="padding-left: 15px" href="/admin/albums/{{ $album->id }}/delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td>{{ $album->id }}</td>
                                            <td>{{ $album->title }}</td>
                                            <td>
                                                <img style="width: 80px;" src="{{Storage::disk('local')->url( $album->cover_photo )}}" class="img-fluid" alt="Responsive image">
                                            </td>
                                            <td>{{ $album->cover_photo }}</td>
                                            <td>{{ $album->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing
                                    1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-6">
                                Pagination will be here
                                {{--{{ $album->render("pagination::bootstrap-4") }}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection