<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('vendor/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                {{--<span class="input-group-btn">--}}
              {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
              {{--</button>--}}
            {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            {{--<li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>--}}
            {{--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}

            {{--Albums--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-stack-overflow"></i> <span>Albums</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/albums"><i class="fa fa-circle-o"></i> Show All</a></li>
                    <li><a href="/admin/albums/create"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>

            {{--Photos--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Photos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/photos"><i class="fa fa-circle-o"></i> Show All</a></li>
                    <li><a href="/admin/photos/create"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>
            {{--Posts--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Posts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/posts"><i class="fa fa-circle-o"></i> Show All</a></li>
                    <li><a href="/admin/posts/create"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>
            {{--Tags--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i> <span>Tags</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/tags"><i class="fa fa-circle-o"></i> Show All</a></li>
                    <li><a href="/admin/tags/create"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i> <span>Nessie Says</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/nessie_says"><i class="fa fa-circle-o"></i> Show All</a></li>
                    <li><a href="/admin/nessie_says/create"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>