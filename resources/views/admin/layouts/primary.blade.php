<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> @yield('title') | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->      <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" >
    <!-- Font Awesome -->   <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}" >
    <!-- Ionicons -->       <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}" >
    <!-- Theme style -->    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css')}}" >
    <!-- Skin -->           <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/skins/skin-blue.min.css')}}" >
    <!-- Google Font -->    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Header -->
        @include('admin.layouts.partials.header')
        <!-- Sidebar -->
        @include('admin.layouts.partials.left_sidebar')

        <div class="content-wrapper">
            <!-- Page header -->
            <section class="content-header">
                <h1> @yield('title') <small>@yield('title-subtext')</small></h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">Posts</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <!-- Your Page Content Here -->
                @yield('content')
            </section>
        </div>

        <!-- Footer -->
        @include('admin.layouts.partials.footer')
        <!-- Control Sidebar -->
        @include('admin.layouts.partials.right_sidebar')
    </div>

    <!-- JS SCRIPTS -->
    <!-- jQuery 3 -->
    <script src="{{ asset('vendor/adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('vendor/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. -->
    </body>
</html>