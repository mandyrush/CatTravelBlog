<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->      <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" >
    <!-- Font Awesome -->   <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}" >
    <!-- Ionicons -->       <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}" >
    <!-- Theme style -->    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css')}}" >
    <!-- Skin -->           <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/skins/skin-blue.min.css')}}" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
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